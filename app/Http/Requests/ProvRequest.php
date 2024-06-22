<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fname' => 'required',
            'email' => 'required|email|unique:providers',
            'phone' => 'required',
            'address' => 'required',
            'job' => 'required',
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password'=> 'required|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            'fname.required' => 'يجب إدخال إسم',
            'email.required' => 'يجب إدخال بريد إلكتروني',
            'phone.required' => 'يجب إدخال هاتف',
            'address.required' => 'يجب إدخال عنوان',
            'job.required' => 'يجب إختيار خدمة',
            'pic.required' => 'يجب إرسال صورة للبطاقة الشخصية',
            'email.email'=>'يجب إدخال بريد إلكتروني صالح',
            'email.unique'=>'هذا البريد الإلكتروني مستخدم بالفعل',
            'pic.image'=>'يجب أن يكون الملف المرسل صورة فقط',
            'password.required'=>'يجب ادخال كلمة السر',
            'password.min'=>'يجب ان تكون كلمة السر تحتوي علي 8 احرف او اكثر'
        ];
    }
}
