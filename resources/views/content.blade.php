<!-- resources/views/content.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'Username - About Us') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->   
    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Golden Retriever.jpg') }}" alt="Golden Retriever">
        </div>
        <div class="breed-info">
            <h2>Golden Retriever</h2>
            <p><strong>Origination:</strong> The Golden Retriever originated in Scotland in the mid-19th century</p>
            <p><strong>Personality:</strong> Friendly, intelligent, and devoted. They are highly trainable and great family dogs.</p>
            <p><strong>Health and Wellness:</strong> Prone to hip dysplasia, elbow dysplasia, and heart disease. Regular exercise and a balanced diet are essential.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Excellent swimmers.</li>
                    <li>Often used as therapy or service dogs.</li>
                    <li>Known for their “soft mouths,” they can carry delicate items without damaging them.</li>
                </ul>
            </p>
            <div class="interaction-buttons">
                <button class="heart" onclick="toggleHeart(this)">
                    <i class="fa fa-heart"></i>
                </button>
                <button onclick="handleComment()">Comment</button>
                <button onclick="handleMessage()">Message</button>
            </div>

            <!-- Comment Section -->
            <div id="commentSection" class="comment-section">
                <textarea id="commentInput" rows="4" placeholder="Write your comment here..."></textarea>
                <button onclick="submitComment()">Submit Comment</button>
            </div>

            <!-- List of Comments -->
            <div id="commentsList" class="comments-list"></div>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/German Shepherd.jpg') }}" alt="German Shepherd">
        </div>
        <div class="breed-info">
            <h2>German Shepherd</h2>
            <p><strong>Origination:</strong> The German Shepherd originated in Germany in the late 19th century.</p>
            <p><strong>Personality:</strong> Loyal, courageous, and confident. They are often used in police and military roles.</p>
            <p><strong>Health and Wellness:</strong> Prone to hip dysplasia and degenerative myelopathy. Regular vet visits and joint care are important.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their versatility in work.</li>
                    <li>One of the most intelligent dog breeds.</li>
                    <li>Rin Tin Tin, a famous movie dog, was a German Shepherd.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Beagle.jpg') }}" alt="Beagle">
        </div>
        <div class="breed-info">
            <h2>Beagle</h2>
            <p><strong>Origination:</strong> The Beagle originated in England, dating back to Roman times.</p>
            <p><strong>Personality:</strong> Curious, friendly, and merry. They have a great sense of smell and enjoy outdoor activities.</p>
            <p><strong>Health and Wellness:</strong> Prone to obesity and ear infections. Regular ear cleaning and exercise are important.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Famous for their excellent sense of smell.</li>
                    <li>Often used in airport security for detection work.</li>
                    <li>Featured in numerous cartoons, such as Snoopy in Peanuts.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Aspin.jpg') }}" alt="Aspin">
        </div>
        <div class="breed-info">
            <h2>Aspin</h2>
            <p><strong>Origination:</strong> The Aspin, also known as the Asong Pinoy, is a native dog breed from the Philippines. It is typically a mixed breed and can be found throughout the country.</p>
            <p><strong>Personality:</strong> Loyal, intelligent, and independent. They are great guard dogs and form strong bonds with their families.</p>
            <p><strong>Health and Wellness:</strong> Generally hardy with fewer genetic health issues compared to purebred dogs. However, they benefit from regular vet visits and vaccinations</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their adaptability to various environments.</li>
                    <li>Aspins come in a variety of shapes, sizes, and colors.</li>
                    <li>They are often adopted from local animal shelters and serve as excellent companions.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Poodle.jpg') }}" alt="Poodle">
        </div>
        <div class="breed-info">
            <h2>Poodle</h2>
            <p><strong>Origination:</strong> The Poodle originated in Germany as a water dog.</p>
            <p><strong>Personality:</strong> Intelligent, active, and alert. They are quick learners and enjoy both mental and physical stimulation.</p>
            <p><strong>Health and Wellness:</strong> Prone to eye disorders and hip dysplasia. Regular grooming is essential due to their curly coat.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their hypoallergenic coats</li>
                    <li>They come in three sizes: Standard, Miniature, and Toy.</li>
                    <li>Originally bred as retrievers for waterfowl hunters.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Siberian Husky.jpg') }}" alt="Siberian Husky">
        </div>
        <div class="breed-info">
            <h2>Siberian Husky</h2>
            <p><strong>Origination:</strong> The Siberian Husky originated in Siberia, Russia, bred by the Chukchi people.</p>
            <p><strong>Personality:</strong> Friendly, energetic, and independent. They thrive in cold environments and enjoy running.</p>
            <p><strong>Health and Wellness:</strong> Prone to cataracts and hip dysplasia. They require regular exercise and grooming.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known for their striking blue or multicolored eyes.</li>
                    <li>Used as sled dogs in Arctic regions.</li>
                    <li>They have a unique howl instead of a typical bark.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Dachshund.jpg') }}" alt="Dachshund">
        </div>
        <div class="breed-info">
            <h2>Dachshund</h2>
            <p><strong>Origination:</strong> The Dachshund originated in Germany, developed for hunting badgers.</p>
            <p><strong>Personality:</strong>  Lively, courageous, and playful. They have a strong prey drive and enjoy digging.</p>
            <p><strong>Health and Wellness:</strong> Prone to back problems due to their long bodies. Weight management is crucial to prevent injury.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known as “sausage dogs” because of their long bodies.</li>
                    <li>Come in three coat varieties: smooth, wirehaired, and longhaired.</li>
                    <li>Famous for participating in "wiener dog races."</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Shih Tzu.jpg') }}" alt="Shih Tzu">
        </div>
        <div class="breed-info">
            <h2>Shih Tzu</h2>
            <p><strong>Origination:</strong> The Shih Tzu originated in China, where they were bred as royal companions.</p>
            <p><strong>Personality:</strong> Affectionate, outgoing, and playful. They are excellent lap dogs and love human attention.</p>
            <p><strong>Health and Wellness:</strong> Prone to respiratory issues and dental problems. Regular grooming and dental care are essential.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known as the “Lion Dog” due to their flowing coat.</li>
                    <li>Popular among Chinese royalty.</li>
                    <li>They were once considered sacred and lived in temples.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Labrador Retriever.jpg') }}" alt="Labrador Retriever">
        </div>
        <div class="breed-info">
            <h2>Labrador Retriever</h2>
            <p><strong>Origination:</strong> The Labrador Retriever originated in Newfoundland, Canada, where they were used as fishing dogs.</p>
            <p><strong>Personality:</strong> Friendly, outgoing, and obedient. They are great family dogs and excel in many activities, including hunting and therapy work.</p>
            <p><strong>Health and Wellness:</strong> Prone to hip dysplasia and obesity. Regular exercise and a balanced diet are necessary.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>One of the most popular dog breeds worldwide.</li>
                    <li>Often used as guide dogs for the blind.</li>
                    <li>They have webbed paws, making them excellent swimmers.</li>
                </ul>
            </p>
        </div>
    </section>

    <section class="breed-section">
        <div class="breed-image">
            <img src="{{ asset('images/Chihuahua.jpg') }}" alt="Chihuahua">
        </div>
        <div class="breed-info">
            <h2>Chihuahua</h2>
            <p><strong>Origination:</strong> The Chihuahua originated in Mexico, possibly as far back as the Toltec civilization.</p>
            <p><strong>Personality:</strong> Alert, lively, and devoted. They form strong bonds with their owners despite their small size.</p>
            <p><strong>Health and Wellness:</strong> Prone to dental issues and hypoglycemia. Regular dental care and monitoring of their diet are important.</p>
            <p><strong>Unique Traits & Fun Facts:</strong>
                <ul>
                    <li>Known as the smallest dog breed.</li>
                    <li>Often carried in purses or bags.</li>
                    <li>They come in both long-haired and short-haired varieties.</li>
                </ul>
            </p>
        </div>
    </section>

    <script>
        function toggleHeart(button) {
            button.classList.toggle('liked');
        }

        function handleComment() {
            const commentSection = document.getElementById('commentSection');
            commentSection.style.display = 'block';
        }

        function submitComment() {
            const commentInput = document.getElementById('commentInput');
            const commentText = commentInput.value;
            
            if (commentText.trim()) {
                // Add the comment to the list
                const commentList = document.getElementById('commentsList');
                const newComment = document.createElement('div');
                newComment.classList.add('comment-item');
                newComment.innerText = commentText;
                commentList.appendChild(newComment);

                // Clear the input and hide the section
                commentInput.value = '';
                document.getElementById('commentSection').style.display = 'none';
            } else {
                alert('Please enter a comment before submitting.');
            }
        }

        function handleMessage() {
            window.location.href = 'http://127.0.0.1:8000/contact'; // Link to the "Contact Us" page
        }
    </script>
@endsection
