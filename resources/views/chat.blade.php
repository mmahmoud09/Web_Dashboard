<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فى الخدمة</title>
    <!-- <link rel="stylesheet" href="styles.css">  -->
    <link rel="icon" type="image/png" href="{{ asset('Images/Logo (1).png') }}"/>
    <style>
        body {
            margin: 0;
        }
        .container {
            width: 100%;
            height: 100vh;
            background-image: url("{{ asset('Images/أفضل-شركات-خدمات-منزلية-بالرياض.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0px 0px;
            position: relative;
        }
        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(65, 64, 64, 0.5);
            z-index: 10;
            top: 0;
            left: 0;
        }
        .chatbot-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 300px;
            margin: 150px auto;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .chatbot-header {
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .chatbot-messages {
            height: 200px;
            overflow-y: scroll;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        .chatbot-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .chatbot-input select,
        .chatbot-input button {
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .chatbot-input button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .typing-indicator {
            font-style: italic;
            color: #888;
        }
        .customer-message {
            font-weight: bold;
            color: #0d6efd;
        }

        .chatbot-response {
            margin-top: 10px;
            padding: 8px;
            background-color: #e5e5e5;
            border-radius: 8px;
        }

        .chatbot-header:hover {
            cursor: pointer;
        }
        .chatbot-response .icon {
            margin-right: 5px;
        }

        .customer-message .icon {
            margin-left: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="overlay">
        <div class="chatbot-card">
            <div class="chatbot-header" onclick="toggleChatbot()">
                مرحبا بك فى المحادثة الخاصة بالدعم
            </div>
            <div class="chatbot-messages" id="chatbot-messages">
            </div>
            <div class="chatbot-input">
                <select id="user-choice">
                    <option value="">حدد سؤالك</option>
                    <option value="commission">ماهى الخدمات التى تقدمها الشركة؟</option>
                    <option value="help">كيف يمكننى التواصل معكم؟</option>
                    <option value="usage">كيف يمكننى استخدام التطبيق؟</option>
                    <option value="work"> هل يمكننى العمل لديكم؟</option>
                </select>
                <button onclick="sendMessage()">ارسال</button>
            </div>
        </div>
    </div>
</div>

<script>
    let chatbotOpen = true;

    function toggleChatbot() {
        const chatbotCard = document.getElementById('chatbot-card');
        const chatbotMessages = document.getElementById('chatbot-messages');

        if (chatbotOpen) {
            chatbotMessages.style.display = 'none';
            chatbotOpen = false;
        } else {
            chatbotMessages.style.display = 'block';
            chatbotOpen = true;
        }
    }

    const responses = {
        help: "يمكنك التواصل معنا على هذا الرقم:01118549985",
        commission: "تقدم الشركة العديد من الخدمات المنزلية مثل:النجارة - التكييف - الكهرباء - أثاث منزلى - طلاء - سباكة",
        usage: "يمكنك استخدام التطبيق كمستخدم :يمكنك تحميل التطبيق ,يمكنك استخدام التطبيق كمزود خدمة عن طريق كتابة بيناتاك فى استمارة البيانات ,اذهب للجزء الخاص باستخدام التطبيق ويمكنك المتابعة",
        work: "بالطبع يمكنك العمل معنا كمزود خدمة ولكن عليك اولا ملء استمارة البيانات ثم المتابعة فى الاجراءات التى تليها"
    };

    displayChatbotResponse("كيف يمكننى مساعدتك؟");

    function displayChatbotResponse(response) {
        const chatbox = document.getElementById('chatbot-messages');
        const chatbotResponse = document.createElement('div');
        chatbotResponse.className = 'chatbot-response';
        chatbotResponse.innerHTML = response;
        chatbox.appendChild(chatbotResponse);
    }

    function sendMessage() {
        const userChoice = document.getElementById('user-choice').value;
        if (userChoice) {
            const question = document.getElementById('user-choice').options[document.getElementById('user-choice').selectedIndex].text;
            displayChatbotResponse(`<div class="customer-message">العميل: ${question}</div>`);
            setTimeout(() => {
                typeMessage(`<div class="chatbot-response">الرد الآلى: ${responses[userChoice]}</div>`);
            }, 1000);
        }
    }

    async function typeMessage(message) {
        const chatbox = document.getElementById('chatbot-messages');
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'typing-indicator';
        typingIndicator.textContent = 'جارى الرد....';
        chatbox.appendChild(typingIndicator);

        await new Promise((resolve) => setTimeout(resolve, 5000));

        chatbox.removeChild(typingIndicator);
        chatbox.innerHTML += message;
    }

</script>
</body>
</html>
