<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        .main-contact {
            max-width: 80vw;
            margin: 0px auto;
            font-family: Arial, sans-serif;
           
        }

        .form-top {
            padding-top: 150px;
        }

        .contact-container {

            display: flex;
            flex-wrap: wrap;
            width: 100%;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            gap: 200px;
            justify-content: center;
        }

        .form-section {
            flex: 1;
            padding: 20px;
            margin: 0px auto;
        }

        .info-section {
            flex: 1;
            padding: 20px;
            color: #333;
            margin: 0px auto;
        }

        .info-section h2 {
            color: #c21e1e;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
            gap: 60px;
        }

        .form-group div {
            flex: 1;
        }

        label {
            margin-bottom: 5px;
            font-size: 17px;
            display: block;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
        }

        textarea {
            resize: none;
            height: 120px;
            border-radius: 15px;
        }

        button {
            padding: 10px;
            border: none;
            background-color: #c21e1e;
            color: white;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            width: 150px;
            margin-left: 20px;
        }

        button:hover {
            background-color: #a81b1b;
        }

        .info-section p {
            margin-bottom: 10px;
        }

        @media (max-width: 1024px) {
            .contact-container {
                gap: 50px;
            }

            .form-group {
                flex-direction: column;
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .contact-container {
                flex-direction: column;
                gap: 30px; 
            }

            .form-section,
            .info-section {
                flex: none;
                width: 80%;
            }

            .form-group {
                flex-direction: column;
                gap: 10px;
            }

            button {
                width: 100%;
                margin-left: 0;
            }
        }

        @media (max-width: 480px) {
            .main-contact {
                margin: 0px;
            }
            .contact-container {
                gap: 20px;
            }

            .form-group div {
                gap: 10px;
            }

            input,
            textarea {
                font-size: 14px;
            }

            label {
                font-size: 15px;
            }
        }
    </style>
</head>

<body>
<section class="main-contact form-top">
    <div class="contact-container">
        <div class="form-section" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-offset="200">
            <form method="POST" action="">
                <div class="form-group">
                    <div>
                        <label for="prenom">Prénom (obligatoire)</label>
                        <input type="text" id="prenom" name="prenom" required>
                    </div>
                    <div>
                        <label for="nom">Nom (obligatoire)</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                </div>
                <label for="email">Adresse mail (obligatoire)</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message (obligatoire)</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">ENVOYER</button>
            </form>
            <?php
           
            ?>
        </div>

        <div class="info-section" data-aos="fade-up" data-aos-delay="500" data-aos-once="true" data-aos-offset="200">
            <h2>Adresse</h2>
            <p>1 ZAC campo vallone Lot numero,<br>20620 Biguglia</p>

            <h2>Coordonnées</h2>
            <p>04 95 30 70 89<br>contact@serdef-incendie.com</p>
            <p>Les contacts par email se font 24h/24.<br>Nous vous répondons dans les meilleurs délais.</p>
        </div>
    </div>
</section>
</body>

</html>