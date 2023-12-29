import time

from pypaystack import Transaction

transaction = Transaction(authorization_key='sk_test_a69fb6c099eddc6e238279709f21848d214f6d07')
response = transaction.initialize(email='successabalaka2002@gmail.com', amount=20000)
authorization_url = response[3]['authorization_url']
ref_code = response[3]['reference']
print(authorization_url, ref_code)
time.sleep(10)
verify = transaction.verify(reference=ref_code)
status = verify[3]['status']
gateway_response = verify[3]['gateway_response']
print(status, gateway_response)
# url = "https://api.paystack.co/transaction/initialize"
# headers = {'Content-Type': "application/json",
#            'Authorization': "Bearer sk_test_a69fb6c099eddc6e238279709f21848d214f6d07",
#            }
#
#
# def initialize(amount, email):
#     data = {'amount': amount,
#             'email': email,
#             }
#     response = requests.get(url=url, params=data, headers=headers)
#     print(response.text)
#
#
# initialize(20000, 'successabalaka2002@gmail.com')
