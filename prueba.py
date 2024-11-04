import requests

# URL del servidor
url = 'http://localhost/bienestar360/index.php'

# Datos de prueba para el login
test_cases = [
    {
        "description": "Login exitoso con credenciales válidas",
        "data": {
            "login": True,
            "loginEmail": "prueba@correo.com",
            "loginPassword": "contraseña_segura"
        },
        "expected": "Bienvenido a Bienestar360"  # Mensaje esperado en la respuesta
    },
    {
        "description": "Login fallido con contraseña incorrecta",
        "data": {
            "login": True,
            "loginEmail": "prueba@correo.com",
            "loginPassword": "contraseña_incorrecta"
        },
        "expected": "Credenciales incorrectas."  # Mensaje esperado en la respuesta
    },
    {
        "description": "Login fallido con email no registrado",
        "data": {
            "login": True,
            "loginEmail": "noexiste@correo.com",
            "loginPassword": "contraseña_segura"
        },
        "expected": "Credenciales incorrectas."  # Mensaje esperado en la respuesta
    },
    {
        "description": "Login fallido con campos vacíos",
        "data": {
            "login": True,
            "loginEmail": "",
            "loginPassword": ""
        },
        "expected": "Credenciales incorrectas."  # Mensaje esperado en la respuesta
    }
]

# Realizar pruebas
for case in test_cases:
    response = requests.post(url, data=case["data"])
    print(f"Test: {case['description']}")
    print(f"Response: {response.text}")
    print("Passed" if case["expected"] in response.text else "Failed")
    print("-" * 40)
