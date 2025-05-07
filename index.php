<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aroceu's favorite movies</title>
    <script src="https://kit.fontawesome.com/fbb66f1bce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">
    <script type="text/javascript">
function watchCheck() {
  let total = document.querySelectorAll('input[type="checkbox"]:checked').length;
  
  document.getElementById("watchSeen").innerHTML = "<strong>You've seen:</strong> " + total + " / 18";
}

    </script>
</head>
<body>

    <h1><small style="margin-right: 1em;"><i class="fa-solid fa-clapperboard"></i></small>aroceu's favorite movies <span class="right"><a href="https://aroceu.com/library">library <small><i class="fa-solid fa-book-open"></i></small></a></span></h1>
    <div style="clear: both;"></div>

    <main>

        <div id="films">

            <div class="row">

                <div class="movie">
                    <label for="wreck-it-ralph">
                        <img src="posters/wreck-it-ralph.jpg" alt="Wreck-It Ralph">
                        <p class="caption"><span><em>Wreck-It Ralph</em> (2012, Rich Moore)</span></p>
                        <input type="checkbox" id="wreck-it-ralph" name="wreck-it-ralph" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="the-social-network">
                        <img src="posters/tsn.jpg" alt="The Social Network">
                        <p class="caption"><span><em>The Social Network</em> (2010, David Fincher)</span></p>
                        <input type="checkbox" id="the-social-network" name="the-social-network" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="kimi-no-na-wa">
                        <img src="posters/your-name.jpg" alt="Kimi No Na Wa">
                        <p class="caption"><span><em>Kimi No Na Wa</em> (2016, Makoto Shinkai)</span></p>
                        <input type="checkbox" id="kimi-no-na-wa" name="kimi-no-na-wa" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="the-iron-giant">
                        <img src="posters/iron-giant.jpg" alt="The Iron Giant">
                        <p class="caption"><span><em>The Iron Giant</em> (1999, Brad Bird)</span></p>
                        <input type="checkbox" id="the-iron-giant" name="the-iron-giant" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>

            </div>

            <div class="row">
                <div class="movie">
                    <label for="meet-the-robinsons">
                        <img src="posters/meet-the-robinsons.jpg" alt="Meet The Robinsons">
                        <p class="caption"><span><em>Meet The Robinsons</em> (2007, Stephen J. Anderson)</span></p>
                        <input type="checkbox" id="meet-the-robinsons" name="meet-the-robinsons" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="hoodwinked">
                        <img src="posters/hoodwinked.jpg" alt="Hoodwinked!">
                        <p class="caption"><span><em>Hoodwinked!</em> (2005, Cory Edwards)</span></p>
                        <input type="checkbox" id="hoodwinked" name="hoodwinked" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="the-truman-show">
                        <img src="posters/truman-show.jpg" alt="The Truman Show">
                        <p class="caption"><span><em>The Truman Show</em> (1998, Peter Wier)</span></p>
                        <input type="checkbox" id="the-truman-show" name="the-truman-show" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="book-of-life">
                        <img src="posters/book-of-life.jpg" alt="Book of Life">
                        <p class="caption"><span><em>Book of Life</em> (2014, Jorge R. Gutierrez)</span></p>
                        <input type="checkbox" id="book-of-life" name="book-of-life" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
            </div>
            
            <div class="row">
                <div class="movie">
                    <label for="shrek-2">
                        <img src="posters/shrek-2.jpg" alt="Shrek 2">
                        <p class="caption"><span><em>Shrek 2</em> (2004, Andrew Adamson, Kelly Asbury, Conrad Vernon)</span></p>
                        <input type="checkbox" id="shrek-2" name="shrek-2" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="glass-onion">
                        <img src="posters/knives-out.jpg" alt="Glass Onion: A Knives Out Mystery">
                        <p class="caption"><span><em>Glass Onion: A Knives Out Mystery</em> (2022, Rian Johnson)</span></p>
                        <input type="checkbox" id="glass-onion" name="glass-onion" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="the-thing">
                        <img src="posters/the-thing.jpg" alt="The Thing">
                        <p class="caption"><span><em>The Thing</em> (1982, John Carpenter)</span></p>
                        <input type="checkbox" id="the-thing" name="the-thing" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="scream">
                        <img src="posters/scream.jpg" alt="Scream">
                        <p class="caption"><span><em>Scream</em> (1996, Wes Craven)</span></p>
                        <input type="checkbox" id="scream" name="scream" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="movie">
                    <label for="jennifers-body">
                        <img src="posters/jennifers-body.jpg" alt="Jennifer's Body">
                        <p class="caption"><span><em>Jennifer's Body</em> (2009, Karyn Kusama)</span></p>
                        <input type="checkbox" id="jennifers-body" name="jennifers-body" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="popstar">
                        <img src="posters/popstar.jpg" alt="Popstar: Never Stop Never Stopping">
                        <p class="caption"><span><em>Popstar: Never Stop Never Stopping</em> (2016, Akiva Schaffer, Jorma Taccone)</span></p>
                        <input type="checkbox" id="popstar" name="popstar" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="the-incredibles">
                        <img src="posters/incredibles.jpg" alt="The Incredibles">
                        <p class="caption"><span><em>The Incredibles</em> (2004, Brad Bird)</span></p>
                        <input type="checkbox" id="the-incredibles" name="the-incredibles" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="clue">
                        <img src="posters/clue.jpg" alt="Clue">
                        <p class="caption"><span><em>Clue</em> (1985, Jonathan Lynn)</span></p>
                        <input type="checkbox" id="clue" name="clue" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="movie">
                    <label for="spider-man-into-the-spider-verse">
                        <img src="posters/itsv.jpg" alt="Spider-Man: Into the Spider-Verse">
                        <p class="caption"><span><em>Spider-Man: Into the Spider-Verse</em> (2018, Bob Persichetti, Peter Ramsey, Rodney Rothman)</span></p>
                        <input type="checkbox" id="spider-man-into-the-spider-verse" name="spider-man-into-the-spider-verse" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">
                    <label for="spy-kids-2">
                        <img src="posters/spy-kids-2.jpg" alt="Spy Kids 2: The Island of Lost Dreams">
                        <p class="caption"><span><em>Spy Kids 2: The Island of Lost Dreams</em> (2002, Robert Rodriguez)</span></p>
                        <input type="checkbox" id="spy-kids-2" name="spy-kids-2" class="checkbox" onchange="watchCheck()" />
                    </label>
                </div>
                <div class="movie">

                </div>
                <div class="movie">

                </div>
            </div>
            </div>
            </div>

        </div>

        <div id="sidebar">

        <details>
            <summary>About</summary>
            <p>Movies are my favorite form of storytelling entertainment as a member of the audience. There's so many ways to enjoy them - by yourself or with others, on a big screen or small - 
                and so many things to take in in a single viewing. I like concise stories, getting punched with just as much effort is needed. This is why I 
                prefer movies to TV shows, because the limitation of the duration of a movie - both in actual runtime as well as its profitability - 
                tends to challenge directors who care to make the most of every element of the medium, and everyone else involved in the process
                to operate to the best of their ability on the project.
            </p>
            <p>I think every movie on this list is a work of art in some way, if only for what they mean to me. This is a summarization of
                my taste in movies and stories in general: a comedic, serious, universality of experience, and a message at the heart of the story,
                or at least joy in its intent to exist. I love stories with a mysterious element because they scratch the itch of my curiosity;
                and I love to laugh and be a little bit scared. Movies feel like a microcosm of our world - and even moreso, I think, because 
                they happen in front of our eyes in a motion we experience. </p>
            <p>When I was a kid, I had a huge preference for animated movies and didn't like watching "real people" movies, but because I 
                was just young and scared of the real world. I preferred watching depictions of non-reality, living in someone else's animated imagination of the world. <em>Spy Kids</em> was 
                what eased me out of this - well, that, and <em>That's So Raven</em>. But feeling myself grow out of being someone who stubbornly didn't want to watch 
                "real people" movies to becoming someone more interested in the less kid-friendly stories that may or may not be based in reality, was a very conscious 
                signal to me that I'd grown up.</p>

            <p>And, well. Look at where we are now. But I still love animated movies; and even moreso, I love kids' movies, because I think nailing a 
                story marketed towards kids that I as an adult can enjoy equally as much, with or without my inner kid, is a remarkable feat in and of itself.
                Even still, I like things that are flawed - that are a little weird, have an off-putting element that can only be attributed to human error,
                or at least, intrinsic to the relatability of the human experience.
                That makes these pieces of art more real, I think. I don't try to find movies that I think are the best (even though these are all 5/5 on my Letterboxd);
                I try to find the movies that I can enjoy over and over again.
            </p>

            <p><strong>TL;DR</strong> These are my favorite movies not only because of how much I like them but because of what they mean to me, and what they say about my taste and view on the world (and stories).</p>
        </details>

        <details>
            <summary>Favorite Things</summary>
            <ul>
                <li>Animation</li>
                <li>Mystery (narrative misdirection)</li>
                <li>Meta/physical/science-related mystery (not necessarily more or less inclined to me in terms of science, but more in that I like standard mystery narratives but I also like meta/physical/science-y mystery just as much as its own genre)</li>
                <li>Fun female characters with distinctive personalities and narrative agency (in a way even if imperfect)</li>
                <li>Homoerotic tension</li>
                <li>Distinctly different and imperfect characters and the complications of communication and maintaining relationships in multiple complex ways</li>
                <li>The agency of kids</li>
                <li>Testing loyalty / betrayal based on situational and characterization context where the perspective makes sense even if it makes the relationship worse. I love a good betrayal in the same way I like undying loyalty. It's about how an incredibly meaningful relationship can be incredibly painful because of how meaningful it is.</li>
                <li>Non-linear narratives as a function of the plot and not just for character or plot execution purposes, surprise flashbacks/reveals included</li>
                <li>Fairy tale / children's classics parodies</li>
                <li>Satire / an element of humor in theme or tone</li>
                <li>Humanist themes / an element of philosophy in messaging</li>
            </ul>
            
            <p>(Basically, it takes itself seriously in ways that do matter but very much doesn't take itself seriously in ways that don't. which, yeah, same.)</p>

            <ul>
                <li>Fun music designed for the movie in a unique world building way (and especially framed through the lens of pop music, which is my favorite music genre)</li>
                <li>Really good and fun storytelling in ways outside of just the actual story and telling, but also in the worldbuilding context where the world plays as much as part of the story as the plot does; and in terms of modern day social relevance as well. </li>
                <li>Magic/superpowers/supernatural elements, or at the very least "not of our world"</li>
                <li>Competition as character and relationship stakes under the guise of being plot stakes. </li>
            </ul>
            
            <p>Romance does not and has never played a factor in how much I like a movie/story. But I do like any romance in all of these movies because they feel relevant to the plot and are executed well and I enjoy the relationship and character dynamic. I just also really like the part of my consumption of any story where the romance happens more in my imagination :)</p>
        </details>

        <details>
            <summary>Other Films</summary>
            <div class="films-small">

                <div class="movie">
                    <img src="etc/hsm.jpg" alt="High School Musical">
                </div>
                <div class="movie">
                    <img src="etc/whms.jpg" alt="When Harry Met Sally">
                </div>

            </div>

            <div class="films-small">
                <div class="movie">
                    <img src="etc/nysm.jpg" alt="Now You See Me">
                </div>
                <div class="movie">
                    <img src="etc/challengers.jpeg" alt="Challengers">
                </div>
            </div>

            <div class="films-small">
                <div class="movie">
                    <img src="etc/rush-hour-2.png" alt="Rush Hour 2">
                </div>
                <div class="movie">
                    <img src="etc/inception.jpg" alt="Inception">
                </div>
            </div>
        </details>

        <p id="watchSeen"><strong>You've seen:</strong> 0 / 18</p>
        <p class="lmk">Feel free to <a href="https://aroceu.com">email me</a> or let me know on social media how many of my favorite movies you've seen :)</p>

        </div>
    </main>

    <footer>
    <?php echo date("Y"); ?> <a href="https://aroceu.com">&hearts; aroceu</a> <a href="https://aroceu.com/atlas"><i class="fa-solid fa-map-location-dot"></i> sitemap</a> <a href="https://letterboxd.com/aroceu/"><i class="fa-brands fa-square-letterboxd"></i> letterboxd</a>
    </footer>
</body>
</html>