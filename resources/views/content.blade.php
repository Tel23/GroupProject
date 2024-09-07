New! Keyboard shortcuts … Drive keyboard shortcuts have been updated to give you first-letters navigation
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Breeds - Purrfect Breeds</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #faf2dd;
            color: #333;
            box-sizing: border-box;
        }

        nav {
            background-color: #FFAFAF;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-sizing: border-box;
        }

        .logo img {
            height: 40px;
            width: auto;
            display: block;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            margin-right: 10px; 
            text-decoration: none; 
        }

        .logo-text {
            font-size: 20px; 
            color: #333; 
            font-weight: bold; 
        }

        .nav-links {
            display: flex;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            font-weight: 600;
        }

        .nav-links a:hover {
            background-color: #fce4e4;
            color: #333;
            border-radius: 5px;
        }

        .breed-section {
            display: flex;
            align-items: flex-start;
            margin: 80px 20px;
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        .breed-image img {
            width: 240px; 
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .breed-info {
            margin-left: 20px;
            flex: 1;
        }

        .breed-info h2 {
            margin-top: 0;
            color: #FF6F6F;
        }

        footer {
            background-color: #FFAFAF;
            color: #333;
            padding: 15px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo-container" style="display: flex; align-items: center;">
            <a href="index.html" class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
            </a>
            <span class="logo-text">Hi, {{ $username }}!</span>
        </div>

        <div class="nav-links">
            <a href="http://127.0.0.1:8000/home">Home</a>
            <a href="http://127.0.0.1:8000/content">Cat Breeds</a>
            <a href="http://127.0.0.1:8000/about">About Us</a>
            <a href="http://127.0.0.1:8000/contact">Contact Us</a>
        </div>
    </nav>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Maine Coon.jpg') }}" alt="Maine Coon">
        </div>
        <div class="breed-info">
            <h2>Maine Coon</h2>
            <p><strong>Origination:</strong> The Maine Coon originated in the United States, specifically in Maine. It’s one of the oldest natural breeds in North America.</p>
            <p><strong>Personality:</strong> Affectionate, intelligent, and gentle. They are sociable and great with families, enjoying time with their owners.</p>
            <p><strong>Health and Wellness:</strong> Prone to hip dysplasia and hypertrophic cardiomyopathy, requiring regular vet check-ups.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known as “gentle giants.”</li>
                    <li>Their tufted ears resemble those of a lynx.</li>
                    <li>They have semi-waterproof fur.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Siamese.jpg') }}" alt="Siamese">
        </div>
        <div class="breed-info">
            <h2>Siamese</h2>
            <p><strong>Origination:</strong> The Siamese cat originated in Thailand, previously known as Siam. It’s one of the oldest and most recognizable breeds in the world.</p>
            <p><strong>Personality:</strong> Vocal, social, and affectionate. Siamese cats are known for their strong bond with their owners and love to communicate.</p>
            <p><strong>Health and Wellness:</strong> Prone to respiratory issues and dental problems, so regular dental care is essential.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their striking blue eyes.</li>
                    <li>They are highly vocal and enjoy "talking" to their owners.</li>
                    <li>Siamese cats have a sleek, slender build.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Persian.jpg') }}" alt="Persian">
        </div>
        <div class="breed-info">
            <h2>Persian</h2>
            <p><strong>Origination:</strong> The Persian cat originated in Persia (modern-day Iran). It was introduced to Europe in the 1600s and became a favorite among royalty.</p>
            <p><strong>Personality:</strong> Calm, gentle, and affectionate. They prefer a serene environment and are very loving towards their owners but reserved around strangers.</p>
            <p><strong>Health and Wellness:</strong> Prone to respiratory issues due to their flat faces; regular grooming is essential to maintain their long fur.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their luxurious, long coat.</li>
                    <li>Their flat, round face gives them a doll-like appearance.</li>
                    <li>They have low energy and prefer lounging over playing. </li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Bengal.jpg') }}" alt="Bengal">
        </div>
        <div class="breed-info">
            <h2>Bengal</h2>
            <p><strong>Origination:</strong> The Bengal cat is a hybrid breed, originating from a cross between domestic cats and the Asian leopard cat.</p>
            <p><strong>Personality:</strong> Active, playful, and curious. Bengals are highly energetic and love to climb and explore their surroundings.</p>
            <p><strong>Health and Wellness:</strong> Generally healthy, but may be prone to heart disease and hip dysplasia.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>They have a wild, leopard-like appearance.</li>
                    <li>Bengals are known for their striking, spotted or marbled coat.</li>
                    <li>They enjoy playing in water.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Ragdoll.jpg') }}" alt="Ragdoll">
        </div>
        <div class="breed-info">
            <h2>Ragdoll</h2>
            <p><strong>Origination:</strong> The Ragdoll cat originated in the United States in the 1960s, bred for its docile and placid temperament.</p>
            <p><strong>Personality:</strong> Calm, affectionate, and easygoing. Ragdolls are known for their tendency to go limp when picked up, hence the name.</p>
            <p><strong>Health and Wellness:</strong> Prone to hypertrophic cardiomyopathy; regular vet visits are important.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Ragdolls are known for their striking blue eyes.</li>
                    <li>They have a semi-long coat that’s soft and silky.</li>
                    <li>Ragdolls are often described as “puppy-like” due to their tendency to follow their owners around.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/British Shorthair.jpg') }}" alt="British Shorthair">
        </div>
        <div class="breed-info">
            <h2>British Shorthair</h2>
            <p><strong>Origination:</strong> The British Shorthair originated in the United Kingdom and is one of the oldest cat breeds in the world.</p>
            <p><strong>Personality:</strong> Calm, independent, and easygoing. British Shorthairs are affectionate but not overly demanding of attention.</p>
            <p><strong>Health and Wellness:</strong> Generally healthy, but prone to obesity; regular exercise and a balanced diet are important.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their round face and dense, plush coat.</li>
                    <li>The breed inspired the Cheshire Cat in “Alice in Wonderland.”</li>
                    <li>They are slow to mature, reaching full physical development at around three years old.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Russian Blue.jpg') }}" alt="Russian Blue">
        </div>
        <div class="breed-info">
            <h2>Russian Blue</h2>
            <p><strong>Origination:</strong> The Russian Blue cat originated in Russia and is known for its stunning blue-gray coat.</p>
            <p><strong>Personality:</strong> reserved, and loyal. Russian Blues are affectionate with their owners but can be shy around strangers.</p>
            <p><strong>Health and Wellness:</strong> Generally healthy, but prone to bladder stones; a proper diet is crucial.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their dense, plush double coat.</li>
                    <li>Their eyes are a striking green color.</li>
                    <li>Russian Blues are known for their strong bond with their owners.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Sphynx.jpg') }}" alt="Sphynx">
        </div>
        <div class="breed-info">
            <h2>Sphynx</h2>
            <p><strong>Origination:</strong> The Sphynx cat originated in Canada in the 1960s, known for its hairless appearance.</p>
            <p><strong>Personality:</strong> Friendly, outgoing, and affectionate. Sphynx cats are social and love to be the center of attention.</p>
            <p><strong>Health and Wellness:</strong> Prone to skin conditions and needs regular bathing; also susceptible to heart issues.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>They have a hairless, wrinkled body with large ears.</li>
                    <li>Despite their lack of fur, they are warm to the touch</li>
                    <li>Sphynx cats are known to be quite energetic and playful.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Scottish Fold.jpg') }}" alt="Scottish Fold">
        </div>
        <div class="breed-info">
            <h2>Scottish Fold</h2>
            <p><strong>Origination:</strong> The Scottish Fold originated in Scotland, characterized by its unique folded ears.</p>
            <p><strong>Personality:</strong> Gentle, affectionate, and easygoing. Scottish Folds enjoy being around people and are very adaptable.</p>
            <p><strong>Health and Wellness:</strong> Prone to joint issues and arthritis due to their folded ears; regular vet check-ups are necessary.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Their folded ears give them an owl-like appearance.</li>
                    <li>They are known to sit in a “Buddha” position.</li>
                    <li>Scottish Folds have a round face and large, expressive eyes.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Abyssinian.jpg') }}" alt="Abyssinian">
        </div>
        <div class="breed-info">
            <h2>Abyssinian</h2>
            <p><strong>Origination:</strong> The Abyssinian cat is one of the oldest known breeds, with origins traced back to ancient Egypt.</p>
            <p><strong>Personality:</strong> Active, playful, and curious. Abyssinians are known for their high energy levels and love of climbing.</p>
            <p><strong>Health and Wellness:</strong> Prone to dental issues and kidney problems; regular dental care and hydration are important.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>They have a ticked coat, giving them a wild appearance.</li>
                    <li>Abyssinians are known for their intelligence and curiosity.</li>
                    <li>They form strong bonds with their owners and enjoy interactive play.</li>
                </ul>
            </p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Purrfect Breeds. All rights reserved.</p>
    </footer>
</body>
</html>