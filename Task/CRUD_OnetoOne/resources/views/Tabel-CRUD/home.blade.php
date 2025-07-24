<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-semibold text-gray-800">Table list</h1>
            <button id="addStudentBtn" class="bg-cyan-500 hover:bg-cyan-600 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                <a href="{{ route('Tabel-CRUD.create') }}">Add</a>
            </button>
        </div>
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="grid grid-cols-12 gap-4 px-6 py-4 bg-gray-50 border-b text-sm font-medium text-gray-600">
                <div class="col-span-3">Name</div>
                <div class="col-span-3">Email</div>
                <div class="col-span-2">Phone</div>
                <div class="col-span-2">Enroll Number</div>
                <div class="col-span-1">Date of admission</div>
                <div class="col-span-1">Actions</div>
            </div>
            <div id="studentsList">
                <div class="grid grid-cols-12 gap-4 px-6 py-4 border-b hover:bg-gray-50 transition-colors">
                    <div class="col-span-3 flex items-center space-x-3">
                        <div class="w-10 h-10 bg-orange-400 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <span class="text-gray-800 font-medium">abdelaziz sabir</span>
                    </div>
                    <div class="col-span-3 flex items-center text-gray-600">jamal@gmail.com</div>
                    <div class="col-span-2 flex items-center text-gray-600">0658737689</div>
                    <div class="col-span-2 flex items-center text-gray-600">213252</div>
                    <div class="col-span-1 flex items-center text-gray-600">2022-04-21</div>
                    <div class="col-span-1 flex items-center space-x-2">
                        <button class="text-cyan-500 hover:text-cyan-600 transition-colors" onclick="editStudent(1)">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-600 transition-colors" onclick="deleteStudent(1)">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 border-b hover:bg-gray-50 transition-colors">
                    <div class="col-span-3 flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gray-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <span class="text-gray-800 font-medium">sabirlkh</span>
                    </div>
                    <div class="col-span-3 flex items-center text-gray-600">sabir@gmail.com</div>
                    <div class="col-span-2 flex items-center text-gray-600">0653921819</div>
                    <div class="col-span-2 flex items-center text-gray-600">762871628776</div>
                    <div class="col-span-1 flex items-center text-gray-600">2022-04-28</div>
                    <div class="col-span-1 flex items-center space-x-2">
                        <button class="text-cyan-500 hover:text-cyan-600 transition-colors" onclick="editStudent(2)">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-600 transition-colors" onclick="deleteStudent(2)">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 border-b hover:bg-gray-50 transition-colors">
                    <div class="col-span-3 flex items-center space-x-3">
                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <span class="text-gray-800 font-medium">sabirlkh</span>
                    </div>
                    <div class="col-span-3 flex items-center text-gray-600">sabir@gmail.com</div>
                    <div class="col-span-2 flex items-center text-gray-600">0653921819</div>
                    <div class="col-span-2 flex items-center text-gray-600">762871628776</div>
                    <div class="col-span-1 flex items-center text-gray-600">2022-04-28</div>
                    <div class="col-span-1 flex items-center space-x-2">
                        <button class="text-cyan-500 hover:text-cyan-600 transition-colors" onclick="editStudent(3)">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-600 transition-colors" onclick="deleteStudent(3)">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 border-b hover:bg-gray-50 transition-colors">
                    <div class="col-span-3 flex items-center space-x-3">
                        <div class="w-10 h-10 bg-orange-400 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <span class="text-gray-800 font-medium">abdelaziz sabir</span>
                    </div>
                    <div class="col-span-3 flex items-center text-gray-600">jamal@gmail.com</div>
                    <div class="col-span-2 flex items-center text-gray-600">0658737689</div>
                    <div class="col-span-2 flex items-center text-gray-600">213252</div>
                    <div class="col-span-1 flex items-center text-gray-600">2022-04-21</div>
                    <div class="col-span-1 flex items-center space-x-2">
                        <button class="text-cyan-500 hover:text-cyan-600 transition-colors" onclick="editStudent(4)">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-600 transition-colors" onclick="deleteStudent(4)">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-4 px-6 py-4 hover:bg-gray-50 transition-colors">
                    <div class="col-span-3 flex items-center space-x-3">
                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-white text-sm"></i>
                        </div>
                        <span class="text-gray-800 font-medium">sabirlkh</span>
                    </div>
                    <div class="col-span-3 flex items-center text-gray-600">sabir@gmail.com</div>
                    <div class="col-span-2 flex items-center text-gray-600">0653921819</div>
                    <div class="col-span-2 flex items-center text-gray-600">762871628776</div>
                    <div class="col-span-1 flex items-center text-gray-600">2022-04-28</div>
                    <div class="col-span-1 flex items-center space-x-2">
                        <button class="text-cyan-500 hover:text-cyan-600 transition-colors" onclick="editStudent(5)">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-600 transition-colors" onclick="deleteStudent(5)">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="studentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-md mx-4">
            <div class="flex justify-between items-center mb-4">
                <h2 id="modalTitle" class="text-xl font-semibold text-gray-800">Add Student</h2>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <form id="studentForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" id="studentName" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="studentEmail" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                    <input type="tel" id="studentPhone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Enroll Number</label>
                    <input type="text" id="studentEnroll" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date of Admission</label>
                    <input type="date" id="studentDate" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                </div>
                
                <div class="flex space-x-3 pt-4">
                    <button type="submit" class="flex-1 bg-cyan-500 hover:bg-cyan-600 text-white py-2 px-4 rounded-lg font-medium transition-colors">
                        Save Student
                    </button>
                    <button type="button" onclick="closeModal()" class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded-lg font-medium transition-colors">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>