<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Grade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function viewGrades($id)
    {
        $student = Student::findOrFail($id);
        $grades = $student->grades;

        return view('students.view_grades', compact('student', 'grades'));
    }

    public function editGrade($id, $gradeId)
    {
        $student = Student::findOrFail($id);
        $grade = Grade::findOrFail($gradeId);

        return view('students.edit_grade', compact('student', 'grade'));
    }

    public function updateGrade(Request $request, $id, $gradeId)
    {
        $request->validate([
            'subject_name' => 'required|string',
            'points' => 'required|integer|between:0,100',
            'received_at' => 'required|date',
        ]);

        $grade = Grade::findOrFail($gradeId);
        $grade->update($request->all());

        return redirect()->route('students.grades', $id)->with('success', 'Оцінка була оновлена');
    }
}

