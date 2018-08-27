# BuildEmpire-Task

Task Details:

Create a 3-step quotation process that has the following steps:
1. Let the user enter their details as listed below, and once completed they should advance on to the
next step.
o Name
o Password
o Email Address
o Phone Number

2. Products to quote for, there are three different types of product, all that have pricing based on
different factors. They are outlined below, and an example of each provided, feel free to set up with
just these three products:

Subscription:
For example, a subscription to a teach course. The user can select what period of time they want to do this for
- Selecting start & end date. The price should be set per day, and the user charged for every day attended (not
including weekends).

Service
For example, extra teaching sessions, however this is charged per hour and the user selects which recurring
day of the week they want it, between what times, and how many weeks for. The service cannot be booked
for a Sunday, and only between 9am & 7pm.

Goods
For example, a textbook, these are simply sold in quantity, and the user selects how many of each item they
want to be able to select.

1. Total quotation for the everything selected, this should include:
o User’s details
o Breakdown of costs by product
o Unique quote id for that quote
o Total cost for the whole quote

The quote should be saved in the database along with relevant information that could later be used to
retrieve the quote.

Features that don't work on this project:

No Subscription Service

Form fails to submit details to the database due to error with model function
