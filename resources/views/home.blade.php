<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoList Tugas</title>
    <style>
        #tugasForm {
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #tugasForm h2 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        #tugasForm input[type="text"],
        #tugasForm input[type="date"],
        #tugasForm button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #tugasForm button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #tugasForm button:hover {
            background-color: #0056b3;
        }

        /* Table Styling */
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: white;
        }

        .table thead {
            background-color: red;
            color: white;
            text-align: left;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        #tugasTableBody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #tugasTableBody tr:hover {
            background-color: #f1f1f1;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            #tugasForm {
                padding: 10px;
            }

            #tugasForm h2 {
                font-size: 20px;
            }

            .table th,
            .table td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- List Tugas -->
    <section id="tugasForm" class="container mt-5">
    <h2 class="text-center" style="text-align: center;">List Tugas</h2>

            <form id="tugasForm" action="{{ route('tugas') }}" method="POST">
                @csrf
                <input type="text" id="tugas" name="tugas" placeholder="Tugas" required>
                <input type="checkbox" id="kelompok" name="kelompok"> Kelompok
                <input type="date" id="deadline" name="deadline">
                <input type="text" id="catatan" name="catatan" placeholder="Catatan">
                <button type="submit">Tambah Tugas</button>
            </form>

            <table class="table table-bordered">
                <thead style="background-color: red;">
                    <tr>
                        <th>No</th>
                        <th>Tugas</th>
                        <th>Kelompok</th>
                        <th>Deadline</th>
                        <th>Catatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="tugasTableBody">
                    @foreach ($tasks as $item => $task)
                    <tr>
                        <th>{{ $item + 1 }}</th>
                        <th>{{ $task->tugas }}</th>
                        @if($task->kelompok == "on")
                            <th>yes</th>
                        @else
                            <th>no</th>
                        @endif
                        <th>{{ $task->deadline }}</th>
                        <th>{{ $task->catatan }}</th>
                        <th>
                            <a href="{{ route('edit-tugas', $task->id) }}">Edit</a>
                            <a href="{{ route('delete-tugas', $task->id) }}">Delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
</body>
</html>