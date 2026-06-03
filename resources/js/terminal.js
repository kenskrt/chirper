const commandInput = document.getElementById('command');
const output = document.getElementById('output');

function typeText(text, element, speed = 30) {
    let i = 0;

    function typing() {
        if (i < text.length) {

            element.innerHTML += text.charAt(i) === '\n'
                ? '<br>'
                : text.charAt(i);

            i++;
            setTimeout(typing, speed);
        }
    }

    typing();
}

commandInput.addEventListener('keydown', function (e) {

    if (e.key === 'Enter') {

        const cmd = commandInput.value;
        let response = '';

        switch (cmd.toLowerCase()) {

            case 'skills':
                response = `HTML
                CSS
                JavaScript
                PHP
                Laravel
                MySQL`;
                break;

            case 'about':
                response = 'I am a BSIT graduate passionate about web development.';
                break;

            case 'projects':
                response = 'Scholarship Management System, Portfolio Website';
                break;
            
            case 'clear':
                output.innerHTML = '';
                commandInput.value = '';
                return;

            default:
                response = 'Command not found.';
        }

        const commandLine = document.createElement('p');
        commandLine.classList.add('text-green-400');
        commandLine.textContent = `C:\\Users\\Kenjie> ${cmd}`;

        output.appendChild(commandLine);

        const responseLine = document.createElement('p');
        responseLine.classList.add('text-white', 'mb-3');

        output.appendChild(responseLine);

        typeText(response, responseLine, 25);

        commandInput.value = '';
    }
});