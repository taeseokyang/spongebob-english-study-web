import pymysql
import time


l = []
while 1:
    s = input()
    if s=='end':
        break
    l.append(s)
conn = pymysql.connect(host='127.0.0.1', user='root', password = 'password', db='spengo',charset='utf8')
cur = conn.cursor()
index = 1
for i in l:
  i = "\'".join(i.split("'")) 
  i = '\\"'.join(i.split('"')) 
  if ':' in i:
    k = i.index(':')
    sql = 'INSERT INTO script VALUES(NULL,"sponge_bob",8,3,'+str(index)+',"'+i[:k]+'","'+i[k+1:]+'",NULL)'
  else:
    sql = 'INSERT INTO script VALUES(NULL,"sponge_bob",8,3,'+str(index)+',"!action","'+i+'",NULL)'
  cur.execute(sql)
  index +=1
  print("good")
conn.commit()
conn.close()

