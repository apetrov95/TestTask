
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


