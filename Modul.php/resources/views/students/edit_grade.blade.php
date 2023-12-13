<!DOCTYPE html>
<html>
<head>
    <title>Редагування оцінки</title>
</head>
<body>
    <h1>Редагування оцінки</h1>

    <form method="POST" action="{{ route('students.updateGrade', ['id' => $student->id, 'grade' => $grade->id]) }}">
        @csrf
        @method('PUT')

        <label for="subject_name">Назва предмету:</label>
        <input type="text" id="subject_name" name="subject_name" value="{{ $grade->subject_name }}" required>

        <label for="points">Кількість балів [0-100]:</label>
        <input type="number" id="points" name="points" value="{{ $grade->points }}" min="0" max="100" required>

        <label for="received_at">Дата отримання:</label>
        <input type="date" id="received_at" name="received_at" value="{{ $grade->received_at->format('Y-m-d') }}" required>

        <button type="submit">Оновити оцінку</button>
    </form>
</body>
</html>
