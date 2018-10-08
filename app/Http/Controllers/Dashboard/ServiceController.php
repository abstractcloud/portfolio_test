<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceHeader;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Получаем все записи из таблицы services
        $services = Service::all();
        $serviceHeader = ServiceHeader::find(1);

        // Передаем во view полученные данные
        return view('dashboard.services.services', [
            'services' => $services,
            'serviceHeader' => $serviceHeader
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.add');
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

        // Валидация формы
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        // сохраняем в таблицу Services
        Service::create($data);

        //перенаправляем на страницу /dashboard/services
        return redirect()->route('services.index');
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
        // Получаем объект который будем редактировать
        $service = Service::find($id);

        return view('dashboard.services.edit', [
            'service' => $service
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

        // Валидация формы
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        // Обновляем данные в таблице под id $id
        Service::find($id)->update($data);

        //перенаправляем на страницу /dashboard/services
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // находим запись которую хотим удалить
        $service = Service::find($id);

        // если она есть то 
        if(!empty($service)){

            // удаляем
            $service->delete();
        }

        // возвращаемся на главную
        return redirect()->route('services.index');
    }

    public function header(Request $request)
    {
        // Получаем все данные с формы (с клиента)
        $data = $request->all();

        // Сохраняем данные в табице service_header
        ServiceHeader::find(1)->update($data);

        //возвращаемся на главную
        return redirect()->route('services.index');
    }
}
