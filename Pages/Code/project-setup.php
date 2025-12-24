<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/nav-style.css">
    <title>Project SetUp in IntelliJ</title>

</head>
<body>
<div class="top-nav">
    <?php include '../nav/top-nav.php'; ?>
</div>

<div class="container">
    <?php include '../nav/left-nav.php'; ?>
</div>
<div class="container-right">
    <?php include '../nav/right-nav.php'; ?>
</div>
<div class="paragraph">
    <section class="section">
        <p class="title">Project Setup</p>
        <p class="paragraph-text">Stay organized from step 1</p>

        <ul class="paragraph-list">
            <li>Create a folder, name it whatever, i named it "Ai_algorithms"</li>
            <li>Create a new intelliJ project, give it a name, and make sure to check "create git repository"</li>
        </ul>

        <img src="../Assests/ProjectSetup/1img.png" alt="Project Setup" class="image">

        <ul class="paragraph-list">
            <li>Create a Main class with an entry point</li>
            <li>Create a package "Model" to store all the code of the model</li>
            <li>Create a class "Manager" that will be useful for coordinating</li>
        </ul>

        <p class="paragraph-text">You should be having a structure similar to this (ignore specific files of the IDE)</p>
        <img src="../Assests/ProjectSetup/img2.png" alt="Project Setup" class="image">
        <p class="paragraph-text">Now create the entry point in main (psvm) and a global scanner</p>

        <details class="code-block">
            <summary class="summary">Entry point in main + Scanner</summary>
            <div class="content">
                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
            <pre><code>
import java.util.Scanner;

public class Main {
    public static final Scanner scanner = new Scanner(System.in);
    public static void main(String[] args) {
        System.out.println("Transformer Algorithm");
    }
}
             </code></pre>
            </div>
        </details>

        <p class="paragraph-text">
            Now go to the next section, and start coding the real Transformer!
        </p>
    </section>
</div>

<script src="JS/script.js"></script>
</body>
</html>

