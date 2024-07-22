(function ($) {
    "use strict";

    $(document).ready(function () {
        var chatLog = $('#chatlog');
        var userInput = $('#userinput');
        var sendBtn = $('#sendbtn');
        chatLog.scrollTop(chatLog[0].scrollHeight);

        function autoMsg() {
            var userMessage = userInput.val().trim();
            if (userMessage !== '') {
                chatLog.append('<li class="user-message">' +
                    '<img src="assets/img/user/3.jpg" alt="user" />' +
                    '<p class="preview">' + userMessage + '</p></li>');
                chatLog.scrollTop(chatLog[0].scrollHeight);
                userInput.val('');

                // Generate bot response
                var botResponse = generateBotResponse(userMessage);
                var pTag = $('<p class="preview"></p>');
                var liTag = $('<li class="bot-message"></li>');
                $('.bot-response').removeClass("bot-response");
                $(liTag).append('<img src="assets/img/logo/collapse-logo.png" alt="chatboat" />');
                $(pTag).addClass("bot-response");
                $(liTag).append(pTag);
                chatLog.append(liTag);

                setTimeout(function () {
                    $(pTag).html(botResponse);
                    // $(pTag).removeClass("bot-response");
                }, 100);
                chatLog.scrollTop(chatLog[0].scrollHeight);
                
            }            
        }

        sendBtn.on("click ", function () {
            autoMsg();
        });

        userInput.on("keydown", function (e) {
            if (e.which === 13) {
                autoMsg();
            }
        });

        function generateBotResponse(userMessage) {
            // Add your logic here to generate bot responses based on user input
            // You can use conditionals, APIs, or predefined responses
            // For simplicity, let's return a fixed response based on user input
            switch (userMessage.toLowerCase()) {
                case 'hi':
                case 'hello':
                    return 'Hello, how can I assist you?';
                case 'how are you?':
                    return 'I am a finx chatbot, so I do not have feelings, but thank you for asking!';
                case 'what is your name?':
                    return 'I am finx ChatBot 3000, here to help you with your questions.';
                case 'what is finx?':
                    return 'Finx is a advance admin dashboard template.';
                case 'thank you':
                    return "You're welcome! If you have any more questions in the future, feel free to ask. Have a great day!";
                case 'what is themeforest':
                    return "ThemeForest is an online marketplace where you can buy and sell various types of website templates.";
                case 'list of digital marketplace':
                    return "Envato Market, Creative Market, TemplateMonster, Mojo Marketplace, WrapBootstrap etc.";
                case 'future of artificial intelligence?':
                    return "The future of artificial intelligence (AI) holds immense potential and is expected to have a significant impact on various aspects of society and technology.";
                case 'what is business management?':
                    return "Business management refers to the process of coordinating and overseeing the activities and operations of an organization to achieve its goals and objectives.";
                case 'future of artificial intelligence?':
                    return "";
                default:
                    return 'I apologize, but I am only understand some pre-defined questions, Just <a target="_blank" href="https://themeforest.net/user/ashishmaraviya" title="Purchase Now from Themeforest">Purchase</a> the template and apply ai algorithems.';
            }
        }
    });

})(jQuery);