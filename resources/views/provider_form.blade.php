<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{ asset('Tools/Styles/provider_form.css') }}">
    <title>فى الخدمة</title>
    <link rel="icon" type="image/png" href="{{ asset('Images/Logo (1).png') }}"/>
    <script src="{{ asset('https://cdn.tailwindcss.com') }}"></script>
</head>
<body >
<div class="cover"></div>
<div class="form-container">
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('status') }}
            </div>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <p>في حالة قبول طلبك سيتم ارسال رسالة الي بريدك الالكتروني</p>
            </div>
        @endif
        <form action="{{Route('providers.register')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <label for="name">الاسم</label>
          <input type="text" id="name" name="fname" value="{{old('fname')}}" placeholder="أدخل اسمك "  required>
            @error('fname')
                <div class="bg-red-500 text-white p-4 rounded-lg">{{ $message }}</div>
            @enderror

          <label for="addr">العنوان</label>
          <input type="text" id="addr" name="address" value="{{old('address')}}" placeholder="أدخل العنوان" required>
            @error('address')
                <div class="bg-red-500 text-white p-4 rounded-lg">{{ $message }}</div>
            @enderror

          <label for="email">البريد الإلكتروني</label>
          <input type="email"  id="email" name="email" value="{{old('email')}}" placeholder="أدخل بريدك الإلكتروني" >
            @error('email')
                <div class="bg-red-500 text-white p-4 rounded-lg">{{ $message }}</div>
            @enderror

          <label for="password">كلمة السر</label>
          <input type="password"  id="password" name="password" value="{{old('password')}}" placeholder="ادخل كلمة السر ">
            @error('password')
                <div class="bg-red-500 text-white p-4 rounded-lg">{{ $message }}</div>
            @enderror

          <label for="ph">رقم الهاتف</label>
          <input type="text" id="ph" name="phone" value="{{old('phone')}}" placeholder="أدخل رقم الهاتف" required>
            @error('phone')
                <div class="bg-red-500 text-white p-4 rounded-lg">{{ $message }}</div>
            @enderror
          <br>
          <br>
          <label for="batchSelect">الخدمة:</label>
          <select id="batchSelect" name="job" value="{{old('job')}}">
          </select>
          @error('job')
                <div class="bg-red-500 text-white p-4 rounded-lg">{{ $message }}</div>
          @enderror

          <br>
          <br>
          <div class="personal_image">
            <label for="pic">صورة البطاقة الشخصية:</label>
          <input class="pic" name="pic" type="file" id="pic" value="{{old('pic')}}" required>
          </div>
          @error('pic')
                <div class="bg-red-500 text-white p-4 rounded-lg">{{ $message }}</div>
            @enderror
          <br>
          <input type="submit" value="إرسال">
        </form>
    </div>

<script src="{{ asset('Tools/Js/provider.js') }}"></script>
</body>


</html>
