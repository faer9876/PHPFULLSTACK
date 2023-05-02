SELECT A.gender, COUNT(A.gender)
from employees A
INNER JOIN
(
SELECT A.emp_no
FROM (
SELECT emp_no
FROM titles
GROUP BY emp_no
HAVING COUNT(emp_no)>1
)A
WHERE A.emp_no NOT IN (
SELECT A.emp_no FROM titles A
INNER JOIN (
SELECT emp_no
FROM titles
GROUP BY emp_no
HAVING COUNT(emp_no)>1
)B
ON A.emp_no=B.emp_no
WHERE to_date=DATE('9999-01-01')
)
UNION

SELECT A.emp_no
FROM titles A
INNER JOIN (
select emp_no
FROM titles A
INNER JOIN (
SELECT emp_no
FROM titles
GROUP BY emp_no
HAVING COUNT(emp_no) =1
)B
ON A.emp_no=B.emp_no
WHERE A.to_date != DATE('9999-01-01')
);