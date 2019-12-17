Register
	url	  :http://localhost/smartvillage/api/web/v1/auth/register
	method: POST
	params:
		-username => string
		-password => string(8 karakter)
Login
	url	  :http://localhost/smartvillage/api/web/v1/auth/login
	method: POST
	params:
		-username => string
		-password => string(8 karakter)

Penambahan Authorization setelah Login
	Kategori Pembangunan
		-url	: http://localhost/smartvillage/api/web/v1/kategori-pembangunan/
		-method	:GET
		-Header :
			-Authorization : Bearer {access_token}

*note:access_token didapat ketika login berhasil
