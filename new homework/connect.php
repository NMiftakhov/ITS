<?php
mysql_connect("localhost", "Ibragim", "12345")//��������� � ������� ("����", "��� ������������", "������")
or die("<p>������ ����������� � ���� ������! " . mysql_error() . "</p>");

mysql_select_db("mybd")//�������� � ������� ("��� ����, � ������� �����������")
 or die("<p>������ ������ ���� ������! ". mysql_error() . "</p>");
