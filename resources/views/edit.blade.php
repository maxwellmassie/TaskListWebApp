<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    </style>
</head>
<body>
    <section id="tugasForm" class="container mt-5">
        <h2 class="text-center">List Tugas</h2>
            <form id="tugasForm" action="{{ route('update-tugas', $task->id) }}" method="POST">
                @csrf
                <input type="text" id="tugas" name="tugas" placeholder="Tugas" value="{{ $task->tugas }}" required>
                @if ($task->kelompok == "on")
                    <input type="checkbox" id="kelompok" name="kelompok" checked> Kelompok
                @else
                    <input type="checkbox" id="kelompok" name="kelompok"> Kelompok
                @endif
                <input type="date" id="deadline" name="deadline" value="{{ $task->deadline }}">
                <input type="text" id="catatan" name="catatan" placeholder="Catatan" value="{{ $task->catatan }}">
                <button type="submit">Simpan Tugas</button>
            </form>
    </section>
</body>
</html>