    <table style="margin: 0 auto; width: 80%; border-collapse: collapse;">
        <th colspan="2" style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">
            <h2>Search</h2>

            <form action="">
                <input class="input" style="width: 100%" height="80px" type="text" placeholder="Search name/designation/department">
            </form>
        </th>
        <tr>

            <th style="background-color: #f2f2f2; padding: 5px; border: 1px solid #ddd; width: 50%;">
                <h2>John Doe</h2>
                <h3>Marketing Manager</h3>
                <h4>Sales and Marketing</h4>
            </th>
            <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd; width: 50%;">
                <h2>Tommy Mark</h2>
                <h3>Mobile Application Dev</h3>
                <h4>Application Development</h4>

            </th>
        </tr>
    </th>
    <tr>

        <th style="background-color: #f2f2f2; padding: 5px; border: 1px solid #ddd; width: 50%;">
            <h2>John Doe</h2>
            <h3>Marketing Manager</h3>
            <h4>Sales and Marketing</h4>
        </th>
        <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd; width: 50%;">
            <h2>Tommy Mark</h2>
            <h3>Mobile Application Dev</h3>
            <h4>Application Development</h4>

        </th>
    </tr>
        @if(isset($results))
            @foreach($results as $result)
                <tr style="border: 1px solid #ddd;">
                    <td style="padding: 10px; border-right: 1px solid #ddd;">{{ $result->name }}</td>
                    <td style="padding: 10px;">{{ $result->designation }} ({{ $result->department }})</td>
                </tr>
            @endforeach
        @endif
    </table>
</div>
