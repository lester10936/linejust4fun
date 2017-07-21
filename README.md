LineBotTemplate: A simple Golang LineBot Template for Line Bot API
==============

[![Join the chat at https://gitter.im/kkdai/LineBotTemplate](https://badges.gitter.im/kkdai/LineBotTemplate.svg)](https://gitter.im/kkdai/LineBotTemplate?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

 [![GoDoc](https://godoc.org/github.com/kkdai/LineBotTemplate.svg?status.svg)](https://godoc.org/github.com/kkdai/LineBotTemplate)  [![Build Status](https://travis-ci.org/kkdai/LineBotTemplate.svg?branch=master)](https://travis-ci.org/kkdai/LineBotTemplate.svg)

[![goreportcard.com](https://goreportcard.com/badge/github.com/kkdai/LineBotTemplate)](https://goreportcard.com/report/github.com/kkdai/LineBotTemplate)


Installation and Usage
=============

### 1. Got A Line Bot API devloper account

[Make sure you already registered](https://business.line.me/zh-hant/services/bot), if you need use Line Bot.

### 2. Just Deploy the same on Heroku

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

Remember your heroku, ID.

<br><br>

### 3. Go to Line Bot Dashboard, setup basic API

Setup your basic account information. Here is some info you will need to know.

- `Callback URL`: https://{YOUR_HEROKU_SERVER_ID}.herokuapp.com:443/callback

You will get following info, need fill back to Heroku.

- Channel Secret
- Channel Access Token

### 4. Back to Heroku again to setup environment variables

- Go to dashboard
- Go to "Setting"
- Go to "Config Variables", add following variables:
	- "ChannelSecret"
	- "ChannelAccessToken"

It all done.

