function copyCode(button) {
    // Find the <code> element relative to the button clicked
    const content = button.nextElementSibling;
    const codeText = content.innerText;

    // Copy to clipboard
    navigator.clipboard.writeText(codeText).then(() => {
        // Visual feedback
        const originalText = button.innerText;
        button.innerText = "Copied!";
        button.classList.add('copied');

        // Reset button after 2 seconds
        setTimeout(() => {
            button.innerText = originalText;
            button.classList.remove('copied');
        }, 2000);
    });
}