
; /* Start:"a:4:{s:4:"full";s:62:"/bitrix/templates/bitrixclear-master/js/init.js?15516293141128";s:6:"source";s:47:"/bitrix/templates/bitrixclear-master/js/init.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/

function Buy() {
    const kol = document.getElementById('middle-label').value;//�������� ���������� �� ���� �����
    const id = document.getElementById('element_id').value;//�������� ID ������
    var formData = new FormData();//�������� ������ ��� �������� ������
    formData.append('id', id);//������� ���������� � ID ������
    formData.append('kol', kol);//������� ���������� � ����������� �������
    //ajax
    var HttpRequest = new XMLHttpRequest();//�������� ������ ��� �������� AJAX �������
    HttpRequest.onload = function(e) {
        if (this.status == 200) {//�������� ��� ��������� ������ �������� (����� ���� 404 ��� ������)
            alert('����� �������� � �������');//���������
            document.getElementById('chart-value').innerText = this.response;//���������� ����� � ������� ������� � �������
        }
    };//������� � ������� ������������ ����� �� �������
    HttpRequest.open("POST", '/bitrix/templates/bitrixclear-master/cart/', true);//��������� ������� ��� �������� (������ �������� ���� � PHP �������)
    HttpRequest.send(formData);//�������� ������� �� ������
}



/* End */
;; /* /bitrix/templates/bitrixclear-master/js/init.js?15516293141128*/
