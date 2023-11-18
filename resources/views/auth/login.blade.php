<div class="wrapper">
    <form method="POST" action="{{ route('login') }}" class="form">
        @csrf
        <h1 class="title">Inicio</h1>
        <div class="inp">
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="input" placeholder="Correo Electronico">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="inp">
            <input id="password" type="password" name="password" required autocomplete="current-password" class="input" placeholder="Contraseña">
            <i class="fa-solid fa-lock"></i>
        </div>
        @if(session('error'))
        <div class="custom-alert mt-3">
            {{ session('error') }}
        </div>
        @endif

        <button class="submit" id="boton1">Iniciar Sesión</button>
        <p class="footer">¿No tienes cuenta?<a href="#" class="link">Por favor, Registrate</a></p>

    </form>
    

    <div class="banner">
        <h1 class="wel_text">RATINGSOFT<br/></h1>
        <p class="para">Inspirados por la excelencia<br/></p>
    </div>
</div>



<style>

*{
    margin: 0;
    padding: 0;
    font-family: arial;
    color: #fff;
}

body {
    height: 100vh;
    background: #081b29;
    display: flex;
    justify-content: center;
    align-items: center;
}


::-webkit-input-placeholder{
    color: #eee
}

.wrapper{
    position: relative;
    width: 800px;
    height: 65vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
    border: 3px solid #00ffff;
    box-shadow: 0 0 50px 0 #00a6bc
}

.form{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center
}

.title{
    font-size: 35px;
}

.inp{
    padding-bottom: 10px;
    border-bottom: 2px solid #eee;
}

.input{
    border: none;
    outline: none;
    background: none;
    width:  260px;
    margin-top:40px;
    padding-rigt: 10px;
    font-size: 17px;
    color: #0ef
}

.submit{
    border: none;
    outline: none;
    width: 288px;
    margin-top: 25px;
    padding: 10px 0;
    font-size: 20px;
    border-radius: 40px;
    letter-spacing: 1px;
    cursor: pointer;
    background: linear-gradient(45deg, #0ef, #c800ff);
}

.footer{
    margin-top: 30px;
    letter-spacing: 0.5px;
    font-size: 14px;
}

.link{
   color: #0ef;
   text-decoration:none; 
}

.banner{
    position: absolute;
    top: 0;
    right: 0;
    width: 450px;
    height: 100%;
    background: linear-gradient(to right, #0ef, #c800ff);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 60% 100%);
    padding-right: 70px;
    text-align: right;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
}

.wel_text{
    font-size: 40px;
    margin-top: -50px;
    line-clamp: 50px;
}

.para{
    margin-top: 10px;
    font-size: 18;
    line-height: 24px;
    letter-spacing: 1px
}

.custom-alert {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
    padding: .75rem 1.25rem;
    border: 1px solid transparent;
    border-radius: .25rem;
    margin-top: 1rem;
}


</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
       $("#boton1").click(function(){

    Swal.fire("eddd")
       });
</script>

