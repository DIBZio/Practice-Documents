class WhatsApp extends Mail {
  constructor(username, isBussinessAccount) {
    super();
    this.username = username;
    this.isBussinessAccount = isBussinessAccount;
  }
}

const wa1 = new WhatsApp("dicoding", true, "6281111111");

console.log(wa1.from); // undefined

constructor(username, isBussinessAccount, phoneNumber);
{
  super(phoneNumber);
  this.username = username;
  this.isBussinessAccount = isBussinessAccount;
}
