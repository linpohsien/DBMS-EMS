Express Mail Service Database Management System
===

- Entity: sender (寄件人), receiver (收件人), product (包裹), expressForm (快遞單), staff (郵差)
- Relationship
  + mail (三元關係): 每一位寄件者可以寄件一張以上的快遞單，也可以沒有寄件任何快遞單，但是，每一張快遞單必須會有一位寄件者的相關資料，並且每一張快遞單必須要有一位收件者的相關資料
  + include (二元關係):一張快遞單可以包含多個包裹
  + deliver (二元關係): 一個郵差可以寄送多張快遞單，一張快遞單也可能要被多個郵差寄送
  + sign (二元關係): 一個郵差可以簽署多張快遞單
- Attribute
  + sender: sdID (寄件人代碼), sdName (寄件人姓名), sdPostalCode (寄件人郵遞區號), sdTel  (寄件人電話)
  + receiver: rcID (收件人代碼), rcName (收件人姓名), rcPostalCode (收件人郵遞區號), rcTel  (收件人電話)
  + staff: stID (收件人代碼), stName (郵差姓名),  stTel  (郵差電話)
  + expressForm (快遞單) : efSerialNo (快遞單代碼), efOfficeCode (郵局代碼),  efPostage  (郵資), efDateMailed (寄件日期)
  + product: pdNo (包裹代碼), pdType (包裹種類),  pdContent  (包裹內容), pdValue (包裹價值)
  
ER Diagram
---

![](https://imgur.com/s1dScr2.jpg)

Relation Schema
---

![](https://imgur.com/PGMYe30.jpg)
