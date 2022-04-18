<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>What are advantages of DBMS over traditional file based systems?</p>
    <p>Ans: Database management systems were developed to handle the following dif?culties of typical ?le-processing systems supported by conventional operating systems.</p>
<p>1.Data redundancy and inconsistency</p>
<p>2.Difficulty in accessing data</p>
<p>3.Data isolation – multiple ?les and formats</p>
<p>4.Integrity problems</p>
<p>5.Atomicity of updates</p>
<p>6.Concurrent access by multiple users</p>
<p>7.Security problems</p>
<br>
<p>What are super, primary, candidate and foreign keys?</p>
<p>Ans: A superkey is a set of attributes of a relation schema upon which all attributes of the schema are functionally dependent. No two rows can have the same value of super key attributes.</p>
<p>A Candidate key is minimal superkey, i.e., no proper subset of Candidate key attributes can be a superkey.</p>
<p>A Primary Key is one of the candidate keys. One of the candidate keys is selected as most important and becomes the primary key. There cannot be more that one primary keys in a table.</p>
<p>Foreign key is a field (or collection of fields) in one table that uniquely identifies a row of another table. See this for an example.</p>
<br>
<p>What is the difference between primary key and unique constraints?</p>
<p>Ans: Primary key cannot have NULL value, the unique constraints can have NULL values. There is only one primary key in a table, but there can be multiple unique constrains.</p>
<br>
<p>What is database normalization?</p>
<p>Ans: It is a process of analyzing the given relation schemas based on their functional dependencies and primary keys to achieve the following desirable properties:</p>
<p>Minimizing Redundancy</p>
<p>2) Minimizing the Insertion, Deletion, And Update Anomalies
Relation schemas that do not meet the properties are decomposed into smaller relation schemas that could meet desirable properties.</p>
<br>
<p>Minimizing Redundancy</p>
<p>SQL is Structured Query Language designed for inserting and modifying in a relational database system.</p>
<br>
<p>What are the differences between DDL, DML and DCL in SQL?</p>
<p>Ans: Following are some details of three.</p>
<p>DDL stands for Data Definition Language. SQL queries like CREATE, ALTER, DROP and RENAME come under this.</p>
<p>DML stands for Data Manipulation Language. SQL queries like SELECT, INSERT and UPDATE come under this.</p>
<p>DCL stands for Data Control Language. SQL queries like GRANT and REVOKE come under this.</p>
<br>
<p>What is the difference between having and where clause?</p>
<p>Ans: HAVING is used to specify a condition for a group or an aggregate function used in select statement. The WHERE clause selects before grouping. The HAVING clause selects rows after grouping. Unlike HAVING clause, the WHERE clause cannot contain aggregate functions. </p>
</body>
</html>