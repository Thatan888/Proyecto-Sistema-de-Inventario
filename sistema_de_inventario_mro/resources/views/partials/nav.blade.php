<nav>
    <ul>
        <li>
            <img src="https://autopistaatlacomulcomaravatio.com/atmv/wordpress/wp-content/uploads/2021/03/mro.png" alt="Logo de la empresa" width="60px" height="60px">
        </li>
    </ul>
    <ul>
        <li><a href="{{ route('home') }}" >Inicio</a></li>
        <li><a href="{{ route('inventario') }}">Inventario</a></li>
        <li><a href="{{ route('reportes') }}">Reportes</a></li>
        <li><a href="{{ route('login') }}">Acceso</a></li>
    </ul>
</nav>

<style>
    nav {
        background-color: #D8D8D8; 
        display: flex; 
        align-items: center; 
        justify-content: space-between; 
        padding: 10px;
        font-size: 20px;
    }

    ul {
        display: flex; 
        list-style-type: none; 
        margin: 0; 
        padding: 0; 
    }

    li {
        margin: 0 15px;
    }
    
    a {
        text-decoration: none; 
        color: #000; 
    }

    a:hover {
        color: #007BFF; 
    }
</style>
