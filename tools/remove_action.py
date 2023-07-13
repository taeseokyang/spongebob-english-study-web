import sys
import pymysql
 
def call(i):
    conn = pymysql.connect(host='127.0.0.1', user='root', password = 'password', db='spengo',charset='utf8')
    # conn = pymysql.connect(host="sql101.infinityfree.com", user="if0_34463025", password = "fdBe0YiPtB0", db="if0_34463025_spongenglish",charset='utf8')
    cur = conn.cursor()
    sql = "SELECT * FROM script WHERE id="+i
    cur.execute(sql)
    result = cur.fetchall()
    i= result[0][6]
    s = 0
    lines =[]
    for j in range(len(i)):
        if i[j]=="[":
            lines.append(i[s:j])
        elif i[j]=="]":
            s = j+1
    lines.append(i[s:])

    print(*lines,sep="")
    conn.commit()
    conn.close()
call(sys.argv[1])


