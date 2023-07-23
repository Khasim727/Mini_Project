import sqlite3
conn=sqlite3.connect(r'C:\xampp\new\htdocs\miniproject\khasim\python\miniproject.db')
cursor=conn.execute("SELECT Reviews FROM testsigma  WHERE sentiment=='positive'")
rows=cursor.fetchall()
# print(len(rows))
# for output
for row in rows:
    print(row[0])
cursor.close()
conn.close()