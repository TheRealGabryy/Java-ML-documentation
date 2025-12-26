<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/nav-style.css">
    <title>Tokenizer</title>
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
        <p class="title">Tokenizer</p>

        <p class="paragraph-text">
            In ML, a tokenizer is an algorithm that breaks down a text (or any other data) into smaller, meaningful
            chunks that are then converted into <b>numerical data</b> that the model can process.
        </p>

        <p class="paragraph-text">
            To start, we will tokenize a <b>single word</b> into an array where <b>each token</b> represents a
            <b>Char</b>
        </p>

        <p class="title">Mapping</p>

        <p class="paragraph-text">
            The first step to take is to map each character in the <b>english alphabet</b> to it's corresponding char,
            so
            each char as it's token. example: <b>a = 11, b = 3, c = 134722</b>, they are all random.
        </p>

        <p class="paragraph-text">
            To keep it simple: we randomly assign each letter to a number between <b>0 and 26</b> because there are 26
            letters in the alphabet. to do it:
        </p>
        <ul class="paragraph-list">
            <li>Create a new java class in the <b>Model</b> folder, call it <b>Tokenizer</b></li>
            <li>create a final variable, i'll call it <b>ALPHABET_LENGTH</b> that has value 26</li>
            <li>The best way to make the correct mapping for char -> token is by using a <b><a
                            href="../Theory/hashmaps.php">HashMap</a></b></li>
            <li>Create 2 <b>HashMaps</b> one that goes <b>from Character to Integer</b> and one that goes <b>from
                    Integer to Character</b></li>
            <li>Create a method called <b>mapTokens (or whatever you want)</b> that returns an <b>array of int</b></li>
        </ul>

        <p class="paragraph-text">
            Now to randomly shuffle numbers from 0 to 25, you can't just use <b>random.nextInt(0, 26) + 1</b> because
            for sure you'll get <b>duplicated tokens</b> meaning that 2 characters will have the same token. confusing
            the model. so instead:
        </p>

        <ul class="paragraph-list">
            <li>Create an <b>Array list (NOT normal array)</b> of ints, and create a for loop where each iteration adds
                the index. so you'll have an array that goes: <b>{0, 1, 2, 3, ... 25}</b>
            </li>
            <li>use <b>Collections.shuffle(numbers, new Random(seed));</b> to randomly shuffle the array. using a
                <b>
                    <a href="../Theory/randomsee.php">Random Seed</a>
                </b> to make a deterministic shuffle (for debugging)
            </li>
            <li>Using ASCII code. Create a for loop that assigns in the HashMaps each alphabet letter to the shuffled
                array of the same index. so each char is paired with a random value from 0 to 25 (this part is easier
                done than said, so check the code below if you didn't understand)
            </li>
        </ul>



        <details class="code-block">
            <summary class="summary">initializeMap method</summary>
            <div class="content">
                <button class="copy-btn" onclick="copyCode(this)">Copy</button>
            <pre><code>
   private void initializeMap(int seed) {

        /*
         * PURPOSE OF THIS ARRAY:
         * Create tokens from 0 to 25, shuffle them deterministically,
         * then assign each token to a character.
         */
        ArrayList<Integer> numbers = new ArrayList<>();
        for (int i = 0; i < ALPH_LENGTH; i++) {
            numbers.add(i); // 0, 1, 2, ..., 25
        }

        Collections.shuffle(numbers, new Random(seed));

        /*
         * ASCII logic:
         * 'a' = 97
         * 'a' + i produces characters from 'a' to 'z'
         */
        for (int i = 0; i < ALPH_LENGTH; i++) {
            char c = (char) ('a' + i);
            int token = numbers.get(i);

            charToToken.put(c, token);
            tokenToChar.put(token, c);
        }

        // Print mapping so it is visible in output, remove the comment to make the print appear at the start of the program
        // printCharToToken();
    }
             </code></pre>
            </div>
        </details>

    </section>
</div>

<div class="container-right">
    <?php include '../nav/right-nav.php'; ?>
</div>

<script src="JS/script.js"></script>
</body>
</html>
