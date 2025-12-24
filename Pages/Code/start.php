<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/nav-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Bitcount+Grid+Single:wght@100..900&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Zalando+Sans+SemiExpanded:ital,wght@0,200..900;1,200..900&display=swap"
          rel="stylesheet">
    <title>Coding ML - introduction</title>
</head>
<body>
<div class="top-nav">
    <?php include '../nav/top-nav.php'; ?>
</div>

<div class="container">
    <?php include '../nav/left-nav.php'; ?>
</div>
<div class="paragraph">
    <section class="section">
        <p class="title">Coding ML: Introduction</p>
        <p class="paragraph-text">CodingTRG is not a tutorial site. It is a training ground. You do not import
            libraries. You do not copy formulas. You build machine learning algorithms from zero, using only an IDE, raw
            code, and mathematics. Every model is derived, implemented, and debugged line by line until it works because
            you understand it. This is where black boxes are dismantled, shortcuts are banned, and competence is forced.
            If you want real control over ML systems, not framework literacy, this is where you start.</p>
        <p class="paragraph-text">In this section we'll go through what you need to know to start coding <br>
            ML algorithms from scratch in java, and later python. in this section you'll know how to code from scratch:
        </p>
        <ul class="paragraph-list">
            <li>General Machine Learning</li>
            <li>Autoregressive Models</li>
            <li>Deep Learning</li>
            <li>Reinforcement Learning</li>
            <li>Diffusion Models</li>
            <li>Computer vision</li>

        </ul>

    </section>

    <section class="section">
        <p class="title">Theory you must know</p>
        <p class="paragraph-text">
            If you don't know this theory, please go to the <a href="../Theory/neural-networks.php"> theory practice</a>
            and study some basics. those basics include:
        </p>

        <ul class="paragraph-list">
            <li>Wx + B > weighted sum of <a href="../Theory/neural-networks.php">neurons</a></li>
            <li>What is tokenization and how it works</li>
            <li>What is the <a href="../Theory/bernulli-distribution.php">Bernulli Distribution</a></li>
            <li>Linear Algebra <b>(CRITICAL)</b></li>
            <li>Probability and statistics <b>(basics)</b></li>
            <li>What is a Scanner and Random in java</li>
        </ul>

    </section>

    <section class="section">
        <p class="title">How to take this course</p>

        <p class="paragraph-text">
            This course will be a mix of TEXT, IMAGES and CODE you can copy and implement right away.
        </p>
        <p class="paragraph-text">
            There will also be practice exercises, and when a big block of code is implemented, also the possibility to
            <b>download</b> the src files for you to play around.
        </p>
        <p class="paragraph-text">
            The modules are structured so you can follow it <b>Linearly</b> but if you already know, for example, how
            tokenization work, you can skip that module.
        </p>
        <p class="paragraph-text">
            Code snippsets will be <b>hidden </b>at first, so you can try to code it yourself. there will be the text
            explanation of the code, and only THEN, then code, but it's better if you try yourself. keep in mind that
            there is <b>no perfect algorithm</b> so if your code is different from the snippset but still works, it's
            perfect, even <b>better</b>
        </p>

        <details class="code-block">
            <summary class="summary">Example of Hidden block</summary>
            <div class="content">
            <pre><code>
                def greet():
                    print("This was hidden!")
                    print("click again to close this")
             </code></pre>
            </div>
        </details>
    </section>

    <section class="section">
        <p class="title">Work Environment</p>
        <div class="img-container">
            <a href="https://www.jetbrains.com/idea/" target="_blank">
                <img src="../Assests/JetBrains_IntelliJ_IDEA_Product_Icon.svg.png" alt="Eclipse IDE" class="img">
            </a>
            <a href="https://eclipseide.org" target="_blank">
                <img src="../Assests/3029968.webp" alt="Eclipse IDE" class="img">
            </a>
            <a href="https://code.visualstudio.com" target="_blank">
                <img src="../Assests/Visual_Studio_Code_1.35_icon.svg.png" alt="Eclipse IDE" class="img">
            </a>
        </div>

        <p class="paragraph-text" style="text-align: center;">
            In this course it will be used <b>IntelliJ IDEA</b>
        </p>
    </section>

    <section class="section">
        <p class="title">Version control</p>
        <div class="img-container">
            <a href="https://github.com" target="_blank">
                <img src="../Assests/GitHub-Emblem.png" alt="Eclipse IDE" class="img" style="width: 270px">
            </a>
        </div>

        <p class="paragraph-text" style="text-align: center;">
            In this course it will be used <b>GitHub</b> for repositories
        </p>
    </section>

    <section class="section">
        <p class="title">Resources</p>
        <p class="paragraph-text" style="text-align: center;">
            Here there are link to very useful resources i found useful when learning
        </p>

        <ul class="paragraph-list">
            <li>
                <a href="https://www.datacamp.com/tutorial/bernoulli-distribution" target="_blank">Bernoulli
                    Distribution</a>
            </li>
            <li>
                <a href="https://en.wikipedia.org/wiki/Machine_learning" target="_blank">Intro do ML</a>
            </li>
            <li>
                <a href="https://www.ibm.com/think/topics/neural-networks" target="_blank">Neural networks</a>
            </li>
            <li>
                <a href="https://en.wikipedia.org/wiki/Machine_learning" target="_blank">Machine learning</a>
            </li>
            <li>
                <a href="https://nebius.com/blog/posts/how-tokenizers-work-in-ai-models" target="_blank">Tokenizer</a>
                (Will come useful really often)
            </li>
            <li>
                <a href="https://www.geeksforgeeks.org/deep-learning/what-is-embedding-layer/" target="_blank">Embedding
                    layer</a>
            </li>
            <li>
                <a href="https://www.baeldung.com/cs/neural-nets-embedding-layers" target="_blank">NN + embedding
                    layer</a>
            </li>
        </ul>
    </section>

    <section class="section">
        <p class="title">
            Why this website?
        </p>

        <p class="paragraph-text">
            This website was <b>coded from scratch</b> for 3 reasons:<br><br> 1) rewrite all i know about AI and ML, since my
            normal notes are a mess, this website is my custom repository of notes.<br><br> 2) to give value, there are NO
            websites like this around, therefore i had to be the one to make it.<br><br> 3) to train my HTML/CSS/JS skills. in
            fact, i want this website to be complete. if you are reading this i'm still at the "documentation" phase
            where this is just a static website, it won't be like this forever, i will add chats, resources, videos, and
            so much more!
        </p>
    </section>
</div>

<div class="container-right">
    <?php include '../nav/right-nav.php'; ?>
</div>
</body>
</html>
