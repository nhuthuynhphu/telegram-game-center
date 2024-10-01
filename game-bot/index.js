require('dotenv').config();
const express = require('express');
const bodyParser = require('body-parser');
const TelegramBot = require('node-telegram-bot-api');
const app = express();
const bot = new TelegramBot(process.env.TELEGRAM_BOT_TOKEN, { polling: true });

app.use(bodyParser.json());

bot.onText(/\/start/, (msg) => {
  bot.sendMessage(
    msg.chat.id,
    `Hi, bro! Are you ready to onboarding space ship? Let’s go! [I'm ready](${process.env.TELEGRAM_GAME_CENTER_URL})`,
    {
      parse_mode: 'Markdown',
    }
  );
});

app.listen(3000, () => {
  console.log('Bot is running on port 3000');
});
