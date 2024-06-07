<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Resume $resume)
    {

        return Resume::limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request, Resume $resume)
     {
         // Валидируем входящие данные
         $request->validate([
             // Добавляем правила валидации для других полей, если это необходимо
             'img' => 'required|mimes:png,jpg,pdf',
         ]);

         // Обрабатываем загрузку изображения
         if ($request->hasFile('img')) {
             // Получаем оригинальное имя файла
             $name = $request->file('img')->getClientOriginalName();

             // Перемещаем файл в папку 'images' и сохраняем путь к файлу
             $path = $request->file('img')->move('images', $name);

             // Получаем относительный путь к файлу
             $path = $name;
         }

         // Создаем запись в базе данных
         $resume = Resume::create([
             'name' => $request->name,
             'surname' => $request->surname,
             'patronymic' => $request->patronymic,
             'level' => $request->level,
             'phone' => $request->phone,
             'task' => $request->task,
             'email' => $request->email,
             'specialty' => $request->specialty,
             'img' => $path ?? null,
         ]);

         // Возвращаем ответ
         return response(['success' => 'Yangilik muvofaqiyatli qoshildi.']);
     }


    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        return $resume;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();

        return "Malumotlar muvofaqiyatli o`chirildi";
    }
}
