<!--footer-->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-heading">
                    <h3><span>Σχετικά</span></h3>
                    <p>Το Κέντρο Συμβουλευτικής Υποστήριξης και Ψυχοκοινωνικής Έρευνας Mirroring παρέχει ολιστική θεραπευτική παρέμβαση και υποστήριξη σε εφήβους, ενήλικες και οικογένειες.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-heading">
                    <h3><span>Τελευταία</span> άρθρα</h3>
                    <ul>
                        @foreach($articles->reverse()->slice(0, 3) as $article)    
                            <li><a href="{{ url('/article/'.$article->id)}}">{{$article->title}}</a></li>
                        @endforeach
                    </ul>
                   <!--  <ul>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                        <li><a href="#">Trends don't matter, but techniques do</a></li>
                    </ul> -->
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-heading">
                    <h3><span>follow</span> us</h3>
                    <div class="">
                        <ul>
                            <a href="https://www.facebook.com/maria.gkioka.5"><img src="/images/facebook.png" alt=""></a>
                            <a href="https://www.linkedin.com/in/maria-s-gkioka-76aa4546/"><img src="/images/linkedin.png" alt=""></a>
                            <!-- <a href="http://cityu.academia.edu/MariaGkioka"><img src="/images/twitter.png" alt=""></a> -->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>