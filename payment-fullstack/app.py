from flask import Flask, render_template, request, redirect, url_for
from pypaystack import Transaction
import os

app = Flask(__name__)
# authorization_ready = False


@app.route('/', methods=['POST', 'GET'])
def home():
    authorization_ready = False
    if request.method == 'POST':
        email = request.form['email']
        form_amount = request.form['amount']
        amount = int(form_amount) * 100
        # print(email, amount)

        transaction = Transaction(authorization_key=os.getenv(key='auth', default='sk_test_a69fb6c099eddc6e238279709f2'
                                                                                  '1848d214f6d07'))
        response = transaction.initialize(email=email, amount=amount)
        authorization_url = response[3]['authorization_url']
        ref_code = response[3]['reference']
        # print(authorization_url, ref_code)
        authorization_ready = True

        return render_template('funding.html', auth_url=authorization_url, authorization_ready=authorization_ready,
                               email=email, amount=form_amount)
    return render_template('funding.html', authorization_ready=authorization_ready)


@app.route('/transaction/success')
def success():
    ref_code = request.args.get('trxref')
    print(ref_code)
    transaction = Transaction(authorization_key=os.getenv(key='auth', default='sk_test_a69fb6c099eddc6e238279709f2'
                                                                              '1848d214f6d07'))
    verify = transaction.verify(reference=ref_code)
    status = verify[3]['status']
    gateway_response = verify[3]['gateway_response']
    print(status, gateway_response)
    if status == 'success':
        return render_template('success.html')
    else:
        return redirect(url_for('home'))


if __name__ == '__main__':
    app.run(debug=True)
# host='0.0.0.0', port=443
