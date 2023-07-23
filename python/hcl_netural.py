import sqlite3
conn=sqlite3.connect(r'C:\xampp\new\htdocs\miniproject\khasim\python\miniproject.db')
cursor=conn.execute("SELECT Reviews FROM hcl  WHERE sentiment=='Netural'")
rows=cursor.fetchall()
# print(len(rows))
# for output
for row in rows:
    print(row[0])
cursor.close()
conn.close()