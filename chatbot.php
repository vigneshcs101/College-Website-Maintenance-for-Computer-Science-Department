<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Chatbot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        #chatbox {
            width: 750px;
            height: 400px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: white;
            margin-bottom: 10px;
        }
        .user-msg, .bot-msg {
            margin: 10px 0;
        }
        .user-msg {
            text-align: right;
            font-weight: bold;
            color: #0056b3;
        }
        .bot-msg {
            text-align: left;
            color: #333;
        }
        input[type="text"] {
            width: 700px;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            margin-left: 5px;
        }
    </style>
</head>
<body>
<Center>
<h2>Chatbot</h2>

<div id="chatbox"></div>

<input type="text" id="user-input" placeholder="Ask about placement...">
<button onClick="sendMessage()">Send</button>

<script>
    // Function to handle user input and display messages
    function sendMessage() {
        let userInput = document.getElementById('user-input').value;
        if (userInput.trim() === "") return;

        // Display user's message
        appendMessage(userInput, 'user-msg');
        
        // Get bot's response based on input
        let botResponse = getBotResponse(userInput);
        
        // Display bot's response after 1 second
        setTimeout(() => {
            appendMessage(botResponse, 'bot-msg');
        }, 1000);

        // Clear input field
        document.getElementById('user-input').value = '';
    }

    // Function to append message to the chatbox
    function appendMessage(message, sender) {
        let chatbox = document.getElementById('chatbox');
        let msgDiv = document.createElement('div');
        msgDiv.classList.add(sender);
        msgDiv.textContent = message;
        chatbox.appendChild(msgDiv);
        chatbox.scrollTop = chatbox.scrollHeight;  // Scroll to the bottom
    }

    // Function to generate bot's response based on the input
    function getBotResponse(input) {
        const lowerInput = input.toLowerCase();
        
        if (lowerInput.includes('interview tips')) {
            return 'Here are some tips for interviews:\n1. Research the company.\n2. Practice common interview questions.\n3. Dress professionally.\n4. Be confident and clear in your communication.';
        } else if (lowerInput.includes('resume help') || lowerInput.includes('resume tips')) {
            return 'For a great resume:\n1. Keep it clear and concise.\n2. Highlight relevant skills and experiences.\n3. Include any internships or relevant projects.\n4. Use action verbs like "achieved", "developed", etc.';
        } else if (lowerInput.includes('job openings') || lowerInput.includes('vacancies')) {
            return 'We have openings in the following fields:\n1. Software Development\n2. Data Science\n3. Marketing\n4. Business Analysis.\nPlease check the career portal for more details!';
        } else if (lowerInput.includes('interview questions')) {
            return 'Common interview questions include:\n1. Tell me about yourself.\n2. Why do you want to work here?\n3. What is your greatest strength?\n4. Describe a challenging situation and how you handled it.';
        } else if (lowerInput.includes('placement process')) {
            return 'The typical placement process includes:\n1. Pre-placement talks.\n2. Online aptitude tests.\n3. Technical interviews.\n4. HR interviews.\nMake sure to prepare well for each round!';
        } else if (lowerInput.includes('thank you') || lowerInput.includes('thanks')) {
            return 'You\'re welcome! Good luck with your preparations!';
        } 
		
		else if (lowerInput.includes('placement process')) {
            return 'The typical placement process includes:\n1. Pre-placement talks.\n2. Online aptitude tests.\n3. Technical interviews.\n4. HR interviews.\nMake sure to prepare well for each round!';
        } 
		else {
            return 'Sorry, I don\'t understand that. Could you please ask something about placements?';
        }
    }
</script>

</body>
</html>
