<header id="header" class="main--header">
        <img class="header--logo" src="./src/logo.png" alt="Logotipo de ITBFlix">
        
        <nav id="nav">
            <ul class="nav--list">
                <li><a href="./index.php">Inicio</a></li>
                <li><a href="./films.php">Películas</a></li>
                <li><a href="./index.php#series-section">Series</a></li>
                <li><a href="./index.php#most-viewed-section">Lo más visto</a></li>
                <li><a href="./login.php">Date de Alta</a></li>
            </ul>
        </nav>
    </header>

    <div class="main--container">
        <main>
            <section>
                <h1>Regístrate</h1>

                <div class="section-content">
                    <form action="./successfull-register.html" method="GET">
                        <span class="warning">Los campos marcados con<span class="red-warning">*</span> son obligatorios.</span>
    
                        <div class="form-content">
                            <div class="form-item">
                                <label for="username">Nombre de Usuario<span class="red-warning">*</span></label>
                                <input class="input" type="text" name="username" id="username" placeholder="Usuario123" required>
                            </div>
        
                            <div class="form-item">
                                <label for="email">Correo electrónico<span class="red-warning">*</span></label>
                                <input class="input" type="email" name="email" id="email" placeholder="email@mail.com" required>
                            </div>
        
                            <div class="form-item">
                                <label for="password">Contraseña<span class="red-warning">*</span></label>
                                <input class="input" type="password" name="password" id="password" required>
                            </div>
        
                            <div class="form-item">
                                <label for="password-confirm">Repita la contraseña<span class="red-warning">*</span></label>
                                <input class="input" type="password" name="password-confirm" id="password-confirm" required>
                            </div>
        
                            <div class="form-item">
                                <label for="date">Fecha de nacimiento<span class="red-warning">*</span></label>
                                <input class="input" type="date" name="date" id="date" required>
                            </div>
        
                            <div class="form-item">
                                <label for="language">Idioma<span class="red-warning">*</span></label>
                                <select class="input" name="language" id="language" required>
                                    <option value="" label="Selecciona..."></option>
                                    <option value="es">Español</option>
                                    <option value="en">Inglés</option>
                                    <option value="de">Alemán</option>
                                </select>
                            </div>
        
                            <div class="form-item">
                                <label for="file">Foto de perfil</label>
                                <input class="input" type="file" name="file" id="file">
                            </div>
        
                            <div class="form-item checkbox">
                                <label for="checkbox">Aceptas los <a href="#">Términos y Condiciones</a> y la <a href="#">Política de Privacidad</a><span class="red-warning">*</span></label>
                                <input class="input" type="checkbox" name="checkbox" id="checkbox" required>
                            </div>
                        </div>
    
                        <button class="input submit" type="submit">Enviar</button>
                    </form>
    
                    <div class="image">
                        <img src="./src/posters/peliculas/sin-novedad-en-el-frente.jpg" alt="Póster de la película Sin Novedad en el Frente">
                    </div>
                </div>
            </section>
        </main>
    </div>