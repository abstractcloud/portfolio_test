<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Works;
use File;
use Validator;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Works::all();

        return view('dashboard.works.works', [
            'works' => $works
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.works.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Получаем все данные с формы (с клиента)
        $data = $request->all();

        $request->validate([
            'title' => 'required',
            'preview' => 'required|mimes:jpeg,bmp,png'
        ]);

        // public_path возвращает полный путь к папке uploads
        $path = public_path('uploads');
        
        // Обращаемся к файлу
        $file = $request->file('preview');

        // Сохраняем наш файл на серевере в папку uploads с орегинальным именем
        $file->move($path, $file->getClientOriginalName());

        // заменяем preview орегинальным именем
        $data['preview'] = $file->getClientOriginalName();

        // сохраняем в таблицу
        Works::create($data);

        //перенаправляем на страницу /dashboard/works
        return redirect()->route('works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Works::find($id);
        return view('dashboard.works.edit', [
            'work' => $work
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Получаем все данные с формы (с клиента)
        $data = $request->all();

        // $request->validate([
        //     'title' => 'required',
        //     'preview' => 'mimes:jpeg,bmp,png'
        // ]);

        $validate = Validator::make($data, [
            'title' => 'required',
            'preview' => 'mimes:jpeg,bmp,png'
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors());
        }
        
        $work = Works::find($id);

        if(!empty($data['preview'])){

            // public_path возвращает полный путь к папке uploads
            $path = public_path('uploads');
            
            // Обращаемся к файлу
            $file = $request->file('preview');

            // Удаляем старый файл
            //$path - путь к папке uploads
            //$work->preview - название файла из таблицы
            File::delete($path . '/' . $work->preview);

            // Сохраняем наш файл на серевере в папку uploads с орегинальным именем
            $file->move($path, $file->getClientOriginalName());

            // заменяем preview орегинальным именем
            $data['preview'] = $file->getClientOriginalName();

        }

        // Обновляем найденую запись на новые данные
        $work->update($data);

        //перенаправляем на страницу /dashboard/works
        return redirect()->route('works.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!empty($id)){

            // находим запись с $id
            $work = Works::find($id);

            // public_path возвращает полный путь к папке uploads
            $path = public_path('uploads');

            // Удаляем старый файл
            //$path - путь к папке uploads
            //$work->preview - название файла из таблицы
            File::delete($path . '/' . $work->preview);

            //Удаляем запись
            $work->delete();
        }

        //перенаправляем на страницу /dashboard/works
        return redirect()->route('works.index');
    }
}
