<!DOCTYPE html>
<html>
<head>
    <title>Перегляд оцінок студента</title>
</head>
<body>
    <h1>Оцінки студента {{ $student->name }}</h1>

    <ul>
        @foreach ($grades as $grade)
            <li>
                {{ $grade->subject_name }} - {{ $grade->points }} балів (отримано: {{ $grade->received_at->format('d.m.Y') }})
                <a href="{{ route('students.editGrade', ['id' => $student->id, 'grade' => $grade->id]) }}">Редагувати</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
