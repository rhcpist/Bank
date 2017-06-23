#!/bin/bash
FILE=$PWD'/cron_stats/amount_statistic.txt'

if [ ! -f "$FILE" ]; then
    touch "$FILE"
    echo "Файл $FILE создан"
fi

echo 'SELECT date, SUM(amount) as prevDaySum FROM transaction WHERE date = SUBDATE(CURDATE(), 1)' | 
mysql -uroot -p1111 -Dbank |
tail -n1 |
sed 's/\t/; /g' >> $FILE