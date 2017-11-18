    This Project is to keep financial records up-to-date. 

    API's exposed :
        1. /addDailyExpense
        2. /addIncoming
        3. /monthlyExpense

    DB schema :

    1. dailyExpense
        a. s.no
        b. date
        c. head
        d. payment_mode
        e. Amount

    2 incoming
        a.Date
        b. Incoming_mode
        c. amount


    3. monthlyExpense
        a. month
        b. online
        c. cash
        d. total


    APIs

    1. /addDailyExpense
         Request Format :

        POST Request to :
                             frontend/addDailyExpense


        #<post-params>

            {
               “amount”: “33333”,
               “date”: "14/10/2017",
               "month" : "october",
               “heads” :"Amazon Now",
               “payment” :"Paytm" 
            }

    Response Format :

            {
            }


    2. /addIncoming

        Request Format :

        POST Request to :
                             frontend/addIncoming

        #<post-params>

            {
                “amount”: “1000”,
               “date”: "14/10/2017",
               “incoming_mode “ :"Added to Vmy's Paytm"
            }

    Response Format :

            {
            }

    3. /monthlyExpense

        Request Format :

        POST Request to :
                            frontend/monthlyExpense

        #<post-params>

            {
              “month”: “October”
            }

     Response Format :

            {
            "online":"5000",
            "cash":"5000",
            "total":"10000"
            }

