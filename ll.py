from pyrogram import Client, filters
from pyrogram.types import (
    Message, CallbackQuery, 
    InlineKeyboardButton as Button, 
    InlineKeyboardMarkup as Markup
)
from kvsqlite.sync import Client as KV
import requests, json, pyromod
from concurrent.futures import ThreadPoolExecutor
status = False
api_id = 8186557 # Here Api Id 
api_hash = "efd77b34c69c164ce158037ff5a0d117" # Here Api Hash 
bot_token = "7812959693:AAG4Pc2zAcUFroINWXRy_jy6hPPRAImOF2s" # Here Bot Token  
app = Client("iiu", api_id=api_id,api_hash=api_hash,bot_token=bot_token)
su = [1758025977,6090158249]  # Here ids admins 
GP = -1001981404431 # Here ID Group sendNumbers 
maxPrice = None # Here Max Price SMSbower
db = KV('iiu.db', 'bot')
class SMSbower:
    def __init__(self, key: None | str = db.get("key")):
        self.key = key
        self.api = f"https://smsbower.online/stubs/handler_api.php?api_key={self.key}"
    def getBalance(self):
        req = requests.get(self.api + "&action=getBalance").text
        if "ACCESS_BALANCE" in req:
            return req.split(":")[-1]
    def getNumber(self, country: str, maxPrice: None | str = None):
        try:
            req = requests.get(self.api + f"&action=getNumberV2&service=wa&country={country}&maxPrice={maxPrice}").text
            req = json.loads(req)
            return {
                "id": req["activationId"],
                "num": "+" + req["phoneNumber"],
                "cost": req["activationCost"] + "₽"
            }
        except: pass
    def Cancel(self, id: str):
        req = requests.get(self.api + "&action=setStatus&status=8&id=" + id).text
        if "ACCESS_CANCEL" in req: return True
    def getCode(self, id: str):
        req = requests.get(self.api + "&action=getStatus&id=" + id).text
        if "STATUS_OK" in req: return req.split(":")[-1].strip()
api = SMSbower()
@app.on_message(filters.command("start") & filters.user(su))
async def s(_, m:Message):
    keb = Markup([[Button("اضافة دولة ➕","add"),Button("حذف دولة 🗑️","del")],
                  [Button("رفع api key","up"),Button("حذف api key","rem")],
                  [Button("الدول المضافة 📊","all")]]) 
    await m.reply("/work لجعل البوت يبدا الصيد\n/stop لجعل البوت يتوقف عن الصيد\nعند ايقاف الصيد لا يتوقف مباشرة وانما يتوقف بعد مرور دقيقة",True, reply_markup=keb)
@app.on_callback_query(filters.regex("^add$") & filters.user(su))
async def ca(c: pyromod.Client, m:CallbackQuery):
    msg = m.message
    keb = Markup([[Button("رجوع🔙","back")]])
    await msg.edit("قم بارسال رمز الدولة من الموقع",reply_markup=keb)
    k = await c.listen(chat_id=msg.chat.id,user_id=m.from_user.id)
    if not db.exists("countries"): db.set("countries", [])
    da = db.get("countries") if db.exists("countries") else []
    if k.text in da: txt = "الدوله مضافه مسبقاً"
    else:
        da.append(k.text)
        db.set("countries",da)
        txt = f"تمت الاضافة بنجاح\nكود الدولة: `{k.text}`\nيستخدم هذا الكود عند الرغبة بحذف الدولة"
    await msg.reply(txt)
@app.on_callback_query(filters.regex("^del$") & filters.user(su))
async def ca(c: pyromod.Client, m:CallbackQuery):
    msg = m.message
    keb = Markup([[Button("رجوع🔙","back")]])
    await msg.edit("قم بارسال رمز الدولة من الموقع",reply_markup=keb)
    k = await c.listen(chat_id=msg.chat.id,user_id=m.from_user.id)
    da = db.get("countries") if db.exists("countries") else []
    if k.text not in da: txt = "لاتوجد دولة مضافة بهذا الكود"
    else:
        da.remove(k.text)
        db.set("countries",da)
        txt = "تم الحذف بنجاح"
    await msg.reply(txt)
@app.on_callback_query(filters.regex("^up$") & filters.user(su))
async def ca(c: pyromod.Client, m:CallbackQuery):
    msg = m.message
    keb = Markup([[Button("رجوع🔙","back")]])
    await msg.edit("قم بارسال api key الخاص بحسابك",reply_markup=keb)
    k = await c.listen(chat_id=msg.chat.id,user_id=m.from_user.id)
    if not db.exists("key"): db.set("key", None)
    if db.get("key"): await m.answer("لايمكنك اضافة api key جديد الا بعد حذف القديم", True)
    else:
        db.set("key",k.text)
        await msg.reply("تم الحفظ بنجاح")
@app.on_callback_query(filters.regex("^rem$") & filters.user(su))
async def ca(_, m:CallbackQuery):
    if not db.get("key"): await m.answer("لم يتم اضافة api key مسبقاً", True)
    else:
        db.set("key",None)
        await m.answer("تم الحذف بنجاح", True)
@app.on_callback_query(filters.regex("^all$") & filters.user(su))
async def ca(_, m:CallbackQuery):
    msg = m.message
    keb = Markup([[Button("رجوع🔙","back")]])
    if db.get("countries"): txt = " ,".join([f"`{co}`" for co in db.get("countries")])
    else: txt = "لا يوجد دول مضافه"
    await msg.edit(txt, reply_markup=keb)
@app.on_callback_query(filters.regex("^back$") & filters.user(su))
async def ca(_, m:CallbackQuery):
    keb = Markup([[Button("اضافة دولة ➕","add"),Button("حذف دولة 🗑️","del")],
                  [Button("رفع api key","up"),Button("حذف api key","rem")],
                  [Button("الدول المضافة 📊","all")]]) 
    await m.message.edit("/work لجعل البوت يبدا الصيد\n/stop لجعل البوت يتوقف عن الصيد\nعند ايقاف الصيد لا يتوقف مباشرة وانما يتوقف بعد مرور دقيقة", reply_markup=keb)
@app.on_message(filters.command("work") & filters.user(su))
async def w(_, m:Message):
    global status, future
    if status: txt = "الصيد يعمل بالفعل"
    elif not db.get("countries"): txt = "برجاء اضافة الدول اولاً حتى تسطيع التشغيل"
    elif not db.get("key"): txt = "برجاء اضافة ال api key اولاً ليتم التشغيل"
    else:
        txt = "تم تشغيل الصيد"
        status = True
        executor = ThreadPoolExecutor(max_workers=1)
        future = executor.submit(checker)
    await m.reply(txt,True)
@app.on_message(filters.command("stop") & filters.user(su))
async def s(_, m:Message):
    global status, future
    if not status: txt = "الصيد لا يعمل بالفعل"
    else:
        txt = "تم ايقاف الصيد"
        status = False
        future.cancel()
    await m.reply(txt,True)
@app.on_callback_query(filters.regex("^getCode#") & filters.user(su))
async def ca(_, m:CallbackQuery):
    d = m.data.split("#")
    num, id = d[1], d[2]
    code = api.getCode(id)
    if code: await m.message.edit(f"✅ تم وصول الكود بنجاح.\n☎️ NUMBER: {num}\n💬 CODE: {code}")
    else: await m.answer("🚫 لم يصل الكود",True)
@app.on_callback_query(filters.regex("^ban#") & filters.user(su))
async def ca(_, m:CallbackQuery):
    id = m.data.split("#")[-1]
    ban = api.Cancel(id)
    if ban: await m.message.edit("تم حظر الرقم بنجاح")
    else: await m.answer("🚫 حدث خطأ اثناء حظر الرقم",True)


def sendNumber(country):
    req = api.getNumber(country, maxPrice)
    if req:
        keb =  {"inline_keyboard": 
                [[{"text": "↗️ - فحص الرقم", "url": f"https://wa.me/{req['num']}"}],
                [{"text": "🌚 طلب الكود", "callback_data": f"getCode#{req['id']}#{req['num']}"}],
                [{"text": "❌ حظر الرقم", "callback_data": f"ban#{req['id']}"}]]
            }
        d = {"text":f"☎️ | NUM: `{req['num']}`\n🆔 | ID: `{req['id']}`\n💰 | COST: `{req['cost']}`",
             "chat_id": GP, "parse_mode": "markdown",
             "reply_markup": json.dumps(keb, ensure_ascii=False)}
        requests.post(f"https://api.telegram.org/bot{bot_token}/sendMessage",d)

def checker():
    global status
    if db.get("key") and db.get("countries"):
        with ThreadPoolExecutor(max_workers=80) as executor:
            while status:
                
                executor.map(sendNumber, db.get("countries"))
            executor.shutdown(wait=False, cancel_futures=True)


if __name__ == "__main__":  
    print('\033[1m bot is running... \n\n')
    app.run()
