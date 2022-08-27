<!DOCTYPE html>
<html>

<head>
    <title>Тестовое письмо</title>
</head>

<body>
    <h3>Сгенерированные числа за день</h3>
    <ul>    
        @foreach ($report as $number)
            <li>Число: {{ $number->number }}</li>
        @endforeach
    </ul>
</body>

</html>
