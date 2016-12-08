function onSay(cid, words, param)

    doPlayerAddPremiumDays(cid, 10)
    doSendMagicEffect(getPlayerPosition(cid), CONST_ME_MAGIC_GREEN)
    doPlayerSendTextMessage(cid, MESSAGE_STATUS_CONSOLE_BLUE, "Added 10 premium days")
   
   return true
end