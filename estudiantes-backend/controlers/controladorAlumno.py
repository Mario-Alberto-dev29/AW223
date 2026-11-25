from flask import Blueprint

controladorAlumnoBP= Blueprint('controladorAlummno',__name__)

@controladorAlumnoBP.route('/')
def inicio():
    return "Hello World Flask"

@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    return 'Se guardo el alumno'

@controladorAlumnoBP.route('/consultatodo', methods=['GET'])
def consultatodo():
    return 'Se consulto todo'

@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    return 'Se actualizo el alumno'

@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])
def elimiar():
    return 'Se elimino el alumno'