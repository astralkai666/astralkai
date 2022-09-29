<div id="home">
    <header id="branding" class="text-center">
        <h1 class="text-capitalize">Astral Kai</h1>
    </header>

    <main id="content-capsule">
        <div data-tab-content id="about" class="active">
            <h2 class="text-capitalize">About</h2>
            
            <div class="about mt-2">
                <p class="mt-2">I don't really know how to talk or frankly thinking, write about myself, so please bear with me.</p>

                <p class="mt-2">My real name is <b>Paul Simalumba</b> but I go by Astral Kai or AstralKai666 and NO I have no affiliations with the Devil or any of his business dealings whatsoever. I'm a self-taught web developer and graphic designer from Botswana. I'm always either coding, drawing, reading, surfing the web or designing graphics. I like taking walks out in nature. Hardcore gamer but winning is not important, fun is. I like history. I don't like politics. I find camping fun. I prefer Linux and the LAMPP stack. I'm arthritic. My favorite author is Roald Dahl. Favorite work by favorite author? it's Pig.</p>

                <p class="mt-2">I prefer simplicity. All the best things in life aren't free. Rather lose the world and keep my soul. I'd volunteer for a no-return voyage to the Andromeda galaxy in the name of science. I have a Zebra-striped coffee mug named Zeke. If today were the last day of my life, I'd still be coding. I'd make a natural monk. I like the smell of baking bread and moist earth. I suck at driving because introvert - I daydream a lot!. I wish I had an invisibility cloak. I believe we can still save this planet. I believe life is what you make it because it's actually true. I like gardens. I love the outdoors. I'm fascinated by space. My pet plant's name is Alfie. I don't waste time on trivial things because life short.</p>

                <p class="mt-4">To get in touch with me click the button with the envelope icon and send me an email so we can discuss aliens, coffee, or whatever's on your mind!.</p>
            </div>
        </div><!-- ./about -->

        <div data-tab-content id="portfolio">
            <div class="portfolio-capsule">
                <h2>Portfolio</h2>
                <!-- <p class="">To view images in original dimensions, right-click on image, click 'save image as' and open them in your device!. </p> -->

                <div class="gallery mt-4">
                    <img src="gallery/g1045.png" class="tile" alt="">
                    <img src="gallery/g1326.png" class="tile" alt="">
                    <img src="gallery/g1444.png" class="tile" alt="">
                    <img src="gallery/g1515.png" class="tile" alt="">
                    <img src="gallery/g1618.png" class="tile" alt="">
                    <img src="gallery/g2186.png" class="tile" alt="">
                    <img src="gallery/g2661.png" class="tile" alt="">
                    <img src="gallery/g1305.png" class="tile" alt="">
                    <img src="gallery/g13249.png" class="tile" alt="">
                </div>
            </div>
        </div><!-- ./portfolio -->

        <div id="contact" style="display: none;">
            <h4>Email me. Let's talk about science and discuss French bread!.</h4>

            <form method="POST" id="contact-form" class="form-body" <?php $_SERVER['PHP_SELF']; ?>>
                <div id="log" class="log form-group text-center"></div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>

                <div class="dual form-group mt-2">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control"/>
                    </div>
                </div>

                <div class="form-group mt-2">
                    <label for="msg">Message</label>
                    <textarea name="msg" id="msg" class="form-control"></textarea>
                </div>

                <input type="button" name="submit" id="submit" class="btn btn-primary mt-4 form-control text-uppercase" value="submit"/>
            </form>

            <div name="php-log" id="php-log" class="mt-4 mb-4"></div>
        </div><!-- ./contact -->
    </main><!-- ./content_capsule -->

    <footer id="footer" class="">
        <div class="links">
            <!-- <ul>
                <h5 class="mb-2">Legal</h5>
                <li class=""><a href="#terms" target="_blank">Terms of Service</a></li>
                <li class=""><a href="#privacy" target="_blank">Privacy Policy</a></li>
            </ul> -->

            <ul>
                <h5 class="mb-2 text-capitalize">find me</h5>
                <li class=""><a href="https://github.com/astralkai666" target="_blank">Github</a></li>
                <li class=""><a href="https://facebook.com/astralkai" target="_blank">Facebook</a></li>
            </ul>
        </div>

        <div class="copyright mt-4 text-center">
            2022 (c) Paul Simalumba. All rights reserved.
        </div>
    </footer>
</div><!-- ./home -->