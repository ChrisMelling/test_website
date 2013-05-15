

<!--login form inputs-->
<form name="article-form" class="article-form" action="article_creation/create" method="post">

    <div class = "header">
        <h1> Article creation </h1>
    </div>

    <!--Input fields-->
    <div class="subject">
        <!--USERNAME--><input name="subject" type="text" class="input subject" value="Subject" /><!--END USERNAME-->
    </div>

    <!--Input fields-->
    <div class="body">
        <textarea cols="40" rows="8" name="bodytext" id="bodytext"></textarea>
    </div>

    <!--Buttons-->
    <div class="footer">
        <!--Login button--><input type="submit" name="submit" value="Create" class="button" /><!--END Login button-->
    </div>
    <!--END Buttons-->

</form>
